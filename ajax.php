<?php

use Orange\User;

session_start();
include_once('config.php');
require 'vendor/autoload.php';

if(isset($_GET['process']) && $_GET['process'] !== ''){
    if($_GET['process'] !== 'login-process' && !User::login_check()){
        //echo $_GET['process'];
        $message =json_encode([
            'respond' => 'No',
            'message' => 'Please refresh <script>location.reload();</script>',
        ]);
        echo json_encode([
            'status' => 'sessionexpired',
            'message' => $message,
        ]);
        header("Refresh:0");
    }else {
        if (file_exists(PROCESSES_PATH . $_GET['process'] . '.php')) {
            include_once(PROCESSES_PATH . $_GET['process'] . '.php');
        } else {
            http_response_code(404);
            echo json_encode([
                'code' => 404,
                'error'=> $_GET['process'] . ' not found'
            ]);
        }
    }
}else{
    http_response_code(400);
    echo json_encode([
        'code' => 400,
        'error' => 'Bad request'
    ]);
}

