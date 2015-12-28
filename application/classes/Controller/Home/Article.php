<?php
class Controller_Home_Article extends Controller_Render {
	
	protected $_checkLogin = TRUE;
	
	protected $_layout = 'layout/home/article';
	
	public function action_add() {
		
		$this->_layout->content = View::factory('home/article/form');
	}
	
	public function action_save() {
		$this->_contentType = 'application/json';
		
		$articleId = Arr::get($_POST, 'article_id', 0);
		$raw = array(
			'title' => Arr::get($_POST, 'title', ''),
			'content' => Arr::get($_POST, 'content', ''),
		);
		
		$errors = array();
		if(!$raw['title']) {
			$errors['title'] = '标题不能为空';
		}
		if(!$raw['content']) {
			$errors['content'] = '内容不能为空';
		}
		
		if($errors) {
			$this->_errors = $errors;
			return $this->failed('数据有误');
		}
		
		$raw['user_id'] = Author::userId();
		
		if($articleId) {
			$result = Dao::factory('Article')->updateByArticleId($articleId, $raw);
		} else {
			$result = Dao::factory('Article')->insert($raw);
			$result = $result[0];
			$articleId = $result;
		}
		if(!$result) {
			return $this->failed('保存失败');
		}
		$this->_data = array(
			'redirect' => '/home/article/list',
			'article_id' => $articleId
		);
		return $this->success('保存成功');
	}
	
	public function action_list() {
		$number = 15;
		$page = Arr::get($_GET, 'page', 1);
		$total = Dao::factory('Article')->countByUserId(Author::userId());

		$pagination = Pagination::factory()
			->total($total)
			->number($number)
			->execute();

		$articles = Dao::factory('Article')->getArticlesByUserId(Author::userId(), $pagination->number, $pagination->offset);
		
		$this->_layout->content = View::factory('home/article/list')
			->set('articles', $articles)
			->bind('pagination', $pagination);
	}
	
	public function action_view() {
		$articleId = Arr::get($_GET, 'article_id', 0);
		if(!$articleId) {
			$articleId = Request::$current->param('article_id');
		}
		$articleId = (int)$articleId;
		
		$article = Dao::factory('Article')->getArticleByArticleId($articleId);
		if(!$article) {
			return Controller::redirect('notfound');
		}
		$this->_layout->content = View::factory('article/view')
			->set('article', $article);
	}
	
	public function action_edit() {
		$articleId = Arr::get($_GET, 'article_id', 0);
		
		$article = Dao::factory('Article')->getArticleByArticleId($articleId);
		$this->_layout->content = View::factory('home/article/form')
			->set('article', $article);
	}
	
	public function action_delete() {
		$this->_contentType = 'application/json';
		
		$articleId = Arr::get($_POST, 'article_id', 0);
		
		$result = Dao::factory('Article')->delete($articleId);
		if(!$result) {
			return $this->failed('操作失败');
		}
		
		return $this->success('操作成功');
	}
}