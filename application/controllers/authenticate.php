<?php

class Authenticate extends Controller {
	
	function index() {
		$template = $this->loadView('main_view');
		$template->render();
	}

    function register() {
		$template = $this->loadView('register');
		$template->render();
	}

	function do_login(){
        $auth = $this->loadModel('auth');
        $login = $auth->login($_POST['user'], $_POST['password']);
        var_dump($login);
        if ($login){
            $this->redirect('admin');
        }
        else {
            $template = $this->loadView('main_view');
        }
        $template->render();
    }

}

?>
