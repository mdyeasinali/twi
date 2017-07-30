<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/29/2017
 * Time: 1:29 AM
 */

class Admin extends Controller {
    function index() {
        global $config;
        $template = $this->loadView('dashboard');
        $template->render();
    }

    function transfer() {
        $template = $this->loadView('transfer');
        $template->render();
    }

    public function transfer_balance(){
        global $config;
        $ret = [];
        $member = $this->loadModel('member');
        $trans = $member->balance_transfer($config['logged']->id, $_POST['recvr'], number_format($_POST['amount'],4,".","."), $_POST['msg']);
        if ($trans){
            $ret['status'] = 'success';
            $ret['msg'] = 'Transfer successfully completed.';
        }
        else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot transfer now. Please try letter.';
        }
        $_SESSION['ret'] = $ret;
        $this->redirect('/admin/transfer');
    }

    function withdraw() {
        $template = $this->loadView('withdraw');
        $template->render();
    }

    public function request_withdraw(){
        global $config;
        $ret = [];
        $member = $this->loadModel('member');
        $dotran = $member->member_balance_withdrawals($_POST);
        if ($dotran){
            $ret['status'] = 'success';
            $ret['msg'] = 'Transfer successfully completed.';
        }
        else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot transfer now. Please try letter.';
        }

        $_SESSION['ret'] = $ret;
        $this->redirect('/admin/withdraw');
    }


    function member_tree() {
        global $config;
        $member = $this->loadModel('member');
        $tree = $member->createTree($config['logged']->id);
        $template = $this->loadView('member_tree');
        $template->set('tree', $tree);
        $template->render();
    }

    public function getTree(){
        $member = $this->loadModel('member');
        //$tree = $member->createTree($config['logged']->id);
        //$member->createTree('10013778');
        //echo $member->createTree($_POST['id']);
        exit();
    }

    public function ref_earn_history(){
        $template = $this->loadView('ref_earn_history');
        $template->render();
    }

    public function hide_nofy(){
        unset($_SESSION['ret']);
        echo json_encode($_POST);
        exit();
    }
}