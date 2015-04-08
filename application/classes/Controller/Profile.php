<?php
class Controller_Profile extends Controller_Layout {
	
	protected $_layout = 'layout/default';

	public function action_list() {
		$profiles = Dao::factory('Profile')->getProfiles();
	
		$this->_layout->content = View::factory('profile/list')
			->set('profiles', $profiles);
	}
}