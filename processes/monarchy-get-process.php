<?php

use Orange\Monarchy;

$record = (new Monarchy())->getMonarchyById($_POST['id']);
if(!empty($record)) {
    $return = [
        'status' => 'success',
        'message' => 'Successfully retrieved',
        'records' => $record,
    ];
}else{
    $return = [
        'status' => 'danger',
        'message' => 'No records to show'
    ];
}

print_r(json_encode($return));