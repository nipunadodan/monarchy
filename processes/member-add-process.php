<?php

use Orange\Db;

$database = new Db();
$error = '';

if(isset($_POST['dob'], $_POST['member_name'], $_POST['parent']) && $_POST['dob'] !== '' && $_POST['member_name'] !== '' && $_POST['parent'] !== '') {
    try {
        $insert = $database->insert("members", [
            "description" => $_POST['description'],
            "member_name" => $_POST['member_name'],
            "official_title" => $_POST['official_title'],
            "parent" => $_POST['parent'],
            "dateofbirth" => $_POST['dob'],
            "sex" => $_POST['sex'],
            "monarchy" => $_POST['monarchy'],
        ]);
        if ($insert->rowCount() == 1) {
            $return = [
                'status' => 'success',
                'message' => 'Successfully added a new member',
            ];
        } else {
            $return = [
                'status' => 'danger',
                'message' => 'Error adding new member',
            ];
        }
    } catch (PDOException $e) {
        $return['error'] = $e->getMessage();
    }
}else{
    $return = [
        'status' => 'warning',
        'message' => 'Please fill all inputs',
    ];
}


print_r(json_encode($return));