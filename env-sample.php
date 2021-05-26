<?php
define("SITE_NAME", "Orange");
define("SITE_TAGLINE", "Lightweight PHP framework");
define("DOMAIN", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/");
define("SITE_ROOT", "nsd/orange/");

define("DB_HOST", "localhost");
define("DB", "orange");
define("DB_USER", "nipuna");
define("DB_PASSWORD", "nipuna123");
define("DB_PREFIX", "o_");

define('APP_ID', ''); //set your unique app id here

define("SECURE", false);
define("PRODUCTION", false);

if(!PRODUCTION){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}else{
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}

date_default_timezone_set('Asia/Colombo'); //set your timezone here


define('OPEN_WEATHER', 'xxxx');