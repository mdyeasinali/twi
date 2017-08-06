<?php

class Authenticate extends Controller {
	
	function index() {
		$template = $this->loadView('main_view');
		$template->render();
	}

    function register() {
        global $config;
        if ($_POST){
            $auth = $this->loadModel('auth');
            $info = $auth->registion($_POST['un'], $_POST['pw'], $_POST['cpw'], $_POST['em'], $_POST['phn'], $_POST['ref']);
            $ret = [];
            if ($info == 4) {
                $ret['status'] = 'error';
                $ret['msg'] = "Your referrer doesnt have minimum balance. Please contact your referrer.";
            } else if ($info == 3) {
                $ret['status'] = 'error';
                $ret['msg'] = 'Cannot transfer balance from your referrer now. Try again letter.';
            } else if ($info == 2) {
                $ret['status'] = 'error';
                $ret['msg'] = 'Ops! Cannot register at this time.';
            } else if ($info == 1) {
                $ret['status'] = 'success';
                $ret['msg'] = 'You have successfully registered.';
            } else if ($info == 0) {
                $ret['status'] = 'error';
                $ret['msg'] = 'Username already exists.';
            }
            $_SESSION['ret'] = $ret;
        }
        $template = $this->loadView('register');
		$template->render();
	}

	function do_login(){
        $auth = $this->loadModel('auth');
        $login = $auth->login($_POST['user'], $_POST['password']);
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
