<?php

use Orange\Db;

$database = new Db();
$error = '';

if(isset($_POST['description'], $_POST['monarchy_name']) && $_POST['description'] !== '' && $_POST['monarchy_name'] !== '') {
    try {
        $insert = $database->insert("monarchy", [
            "description" => $_POST['description'],
            "monarchy_name" => $_POST['monarchy_name']
        ]);
        if ($insert->rowCount() == 1) {
            $return = [
                'status' => 'success',
                'message' => 'Successfully added a new Monarchy',
            ];
        } else {
            $return = [
                'status' => 'danger',
                'message' => 'Error adding new monarchy',
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