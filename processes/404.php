<?php
http_response_code(301);

$error = [
    'code' => 301,
    'error' => 'perm moved',
    'params' => json_encode($_POST),
];

print_r(json_encode($error));