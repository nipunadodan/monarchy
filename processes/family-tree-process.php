<?php

use Orange\Db;

$members = (new Db())->select('members',
    '*'
    ,[
        'monarchy' => 1,
        'status[>=]' => 5,
        'ORDER' => 'dateofbirth'
    ]);

$list = [];
$oldest = $beginning = strtotime('1900-01-01');

if(count($members) > 0) {
    foreach ($members as $row) {
        $ref = &$refs[$row['id']];

        $ref['parent_id'] = $row['parent'];
        $ref['name'] = $row['member_name'];
        $ref['title'] = $row['official_title'];
        $ref['id'] = $row['id'];
        $ref['dob'] = $row['dateofbirth'];
        $ref['sex'] = $row['sex'];

        if ($row['parent'] == 0) {
            $list[] = &$ref;
        } else {
            $refs[$row['parent']]['children'][] = &$ref;
        }
    }

    $return = [
        'status' => 'success',
        'message' => 'Successfully retrieved records',
        'records' => $list
    ];
}else{
    $return = [
        'status' => 'danger',
        'message' => 'No records to show up'
    ];
}



print_r(json_encode($return));