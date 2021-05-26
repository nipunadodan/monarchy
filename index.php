<?php

include_once 'config.php';

if(file_exists('vendor/autoload.php')){
    require 'vendor/autoload.php';
}else{
    die('Please execute <pre style="display: inline-block; padding: 0.5em; background: #dfdfdf; border-radius: 3px">composer update</pre>');
}

//include_once CORE_PATH.'includes/db_conn.php';
include_once INC_PATH.'functions.php';

include_once TEMPLATE_PATH.'header.php';
include_once TEMPLATE_PATH.'content.php';
include_once TEMPLATE_PATH.'footer.php';

