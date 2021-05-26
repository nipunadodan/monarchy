<?php

function pre($vat){
    echo '<pre>';
    print_r($vat);
    echo '</pre>';
}

function url($url) {
    $url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
    $url = trim($url, "'");
    $url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
    $url = strtolower($url);
    $url = preg_replace('~[^-a-z0-9_]+~', '', $url);
    return $url;
}