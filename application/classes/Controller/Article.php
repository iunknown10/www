<?php
class Controller_Article extends Controller_Render {
	
	protected $_layout = 'layout/article';
	
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
		
		$user = Dao::factory('User')->getUserByUserId($article->getUserId());
		
		$this->_layout->content = View::factory('article/view')
			->set('article', $article)
			->set('user', $user);
	}
}