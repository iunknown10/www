<?php
class Controller_Logout extends Controller {
	
	public function action_index() {
		if(Author::instance()->logout()) {
			return Controller::redirect('/');
		}
		
		Controller::redirect(Request::current()->referrer());
	}
}