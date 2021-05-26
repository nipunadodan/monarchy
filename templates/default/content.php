<?php
if (isset($_GET['page']) && $_GET['page']) {
    $page_path = DOC_ROOT.'controllers/'. $_GET['page'] . 'Controller.php';
    if (file_exists($page_path)) include_once($page_path);
    //else echo 'file not exist';
}

if (isset($_GET['page']) && $_GET['page']) {
    $page_path = PAGE_PATH . $_GET['page'] . '.php';
    if (file_exists($page_path)) {
        include_once(PAGE_PATH . $_GET['page'] . '.php');
    } else {
        include_once(PAGE_PATH . '404.php');
    }
} else {
    include_once(PAGE_PATH . 'home.php');
}


