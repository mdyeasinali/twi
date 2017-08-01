<?php

class Authenticate extends Controller {
	
	function index() {
		$template = $this->loadView('main_view');
		$template->render();
	}

    function register() {
        $auth = $this->loadModel('auth');
        $info = $auth->registion($_POST['un'], $_POST['pw'], $_POST['cpw'], $_POST['em'], $_POST['phn'], $_POST['ref']);
		$template = $this->loadView('register');
        $template->set('info', $info);
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
