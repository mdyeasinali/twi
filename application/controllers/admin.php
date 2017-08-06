<?php

/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/29/2017
 * Time: 1:29 AM
 */
class Admin extends Controller
{
    function index()
    {
        global $config;
        $amount = $this->loadModel('DasborardAmount');
        $totalamount = $amount->toDayrefEarn();
        $totalWithdrawal = $amount->toDayWithdrawal();
        $totaljobEran = $amount->toDayjobEran();
        $template = $this->loadView('dashboard');
        $template->set("refamount", $totalamount);
        $template->set("withdrawalamount", $totalWithdrawal);
        $template->set("totaljobEran", $totaljobEran);
        $template->render();
    }

    function transfer()
    {
        $template = $this->loadView('transfer');
        $template->render();
    }

    function jobs()
    {
        global $config;
        $job = $this->loadModel('Alljob');
        $jobinfo = $job->jobs($config["logged"]->id);
        $template = $this->loadView('jobs');
        $template->set("jobinfo", $jobinfo);
        $template->render();
    }

    function job_area($data)
    {
        global $config;
        $job = $this->loadModel('Alljob');
        if ($_GET['click']) {
            $job->job_click($data);
            $this->redirect("admin/jobs");
        }
        $jobarea = $job->job_ares($data);
        $template = $this->loadView('job_area');
        $template->set("jobarea", $jobarea);
        $template->render();
    }


    function job_history()
    {
        global $config;
        $jobss = $this->loadModel('Alljob');
        $jobhes = $jobss->jobshestory($config["logged"]->id);
        $template = $this->loadView('job_history');
        $template->set("jobhes", $jobhes);
        $template->render();
    }

    function account_inactive()
    {
        global $config;
        $users = $this->loadModel('Account');
        $msg = $users->account_inactive($config["logged"]->id, $_POST['username'], $_POST['password']);
        if ($msg) {
            $ret['status'] = 'success';
            $ret['msg'] = 'Account Inactive Successfully completed.';
        } else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot Account Inactive  now. Please try letter.';
        }
        $template = $this->loadView('account_inactive');
        $template->render();
        $_SESSION['ret'] = $ret;
    }

    function view_profile()
    {
        global $config;
        $template = $this->loadView('view_profile');
        $template->render();
    }

    function update_profile()
    {
        global $config;
        $users = $this->loadModel('Account');
        $data = $users->profileUpdate($config["logged"]->id, $_POST['mun'], $_POST['mem'], $_POST['mphn']);
        if ($data) {
            $ret['status'] = 'success';
            $ret['msg'] = 'Password change successfully completed.';
            $template = $this->loadView('view_profile');
        } else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot change password. Please try letter.';
            $template = $this->loadView('update_profile');
        }

        $template->render();
        $_SESSION['ret'] = $ret;
    }

    function change_password()
    {
        global $config;
        $users = $this->loadModel('Account');
        $data = $users->getUserinfo($config["logged"]->id, $_POST['password'], $_POST['cpassword'], $_POST['npassword']);
        if ($data) {
            $ret['status'] = 'success';
            $ret['msg'] = 'Password change successfully completed.';
        } else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot change password. Please try letter.';
        }
        $template = $this->loadView('change_password');
        $template->set("data", $data);
        $template->render();
        $_SESSION['ret'] = $ret;
    }

    public function transfer_balance()
    {
        global $config;
        $ret = [];
        $member = $this->loadModel('member');
        $trans = $member->balance_transfer($config['logged']->id, $_POST['recvr'], number_format($_POST['amount'], 4, ".", "."), $_POST['msg']);
        if ($trans) {
            $ret['status'] = 'success';
            $ret['msg'] = 'Transfer successfully completed.';
        } else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot transfer now. Please try letter.';
        }
        $_SESSION['ret'] = $ret;
        $this->redirect('/admin/transfer');
    }

    function transfer_history()
    {
        $member = $this->loadModel('member');
        $tranHis = $member->bal_tran_hestory();
        $template = $this->loadView('transfer_history');
        $template->set("tranHis", $tranHis);
        $template->render();
    }

    function withdraw()
    {
        $template = $this->loadView('withdraw');
        $template->render();
    }


    function withdraw_history()
    {
        $member = $this->loadModel('member');
        $withHis = $member->bal_with_hestory();
        $template = $this->loadView('withdraw_history');
        $template->set("withHis", $withHis);
        $template->render();

    }

    public function request_withdraw()
    {
        global $config;
        $ret = [];
        $member = $this->loadModel('member');
        $dotran = $member->member_balance_withdrawals($_POST);
        if ($dotran) {
            $ret['status'] = 'success';
            $ret['msg'] = 'Transfer successfully completed.';
        } else {
            $ret['status'] = 'error';
            $ret['msg'] = 'Cannot transfer now. Please try letter.';
        }

        $_SESSION['ret'] = $ret;
        $this->redirect('/admin/withdraw');
    }


    function member_tree()
    {
        global $config;
        $member = $this->loadModel('member');
        $tree = $member->createTree($config['logged']->id);
        $template = $this->loadView('member_tree');
        $template->set('tree', $tree);
        $template->render();
    }

    function member_request()
    {
        $member = $this->loadModel('member');
        if ($_GET['status']!=0) {
            $member->member_approve();
        }
        global $config;

        $meminfo = $member->member_request();        ;
        $template = $this->loadView('member_request');
        $template->set('meminfo', $meminfo);
        $template->render();
    }

    public function getTree()
    {
        $member = $this->loadModel('member');
        //$tree = $member->createTree($config['logged']->id);
        //$member->createTree('10013778');
        //echo $member->createTree($_POST['id']);
        exit();
    }

    public function ref_earn_history()
    {
        $template = $this->loadView('ref_earn_history');
        $template->render();
    }

    public function logout()
    {
        session_destroy();
        $this->redirect("");
    }

    public function hide_nofy()
    {
        unset($_SESSION['ret']);
        echo json_encode($_POST);
        exit();
    }
}