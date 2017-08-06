<?php
/**
 * Created by IntelliJ IDEA.
 * User: BOSS
 * Date: 7/29/2017
 * Time: 3:55 AM
 */

function pre($content,$exit = false,$varDump=false){
    echo '<div style="padding: 75px 15px 15px 300px; border: 1px solid #ff0000;"><pre style="word-wrap: break-word; white-space: pre-wrap;">';
    $varDump ? var_dump($content) : print_r($content);
    echo '</pre></div>';
    if ($exit){
        exit();
    }
}

function toast($status, $msg, $color){
    $col = $color ? $color : '';
    echo "showToast({
        status: '".$status."',
        msg: '".$msg."',
        color: '".$col."'
    });";
}
