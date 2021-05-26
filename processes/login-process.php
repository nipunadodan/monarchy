<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//sec_session_start(); // Our custom secure way of starting a PHP session.

use Orange\User;

$current_user = new User();

if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $nothashpw = $_POST['password'];

    $verify = $current_user->login($username, $nothashpw);
    //print_r($verify);
    if ($verify == true) {
        $return = array(
            'message' => 'Login Success.',
            'status' => 'success'
        );
    } else {
        $return = array(
            'message' => 'You\'ve entered invalid credentials.',
            'status' => 'danger'
        );
    }

} else {
    $return = array(
        'message' => 'Invalid Request.',
        'status' => 'danger'
    );
}

echo json_encode($return);
//var_dump($_SESSION);
