<?php
session_start();
//	Global settings

define("DOC_ROOT", dirname(realpath(__FILE__))."/");
include_once DOC_ROOT.'env.php';
define("SITE_URL", DOMAIN.SITE_ROOT);
define('VERSION','v2.2.0.004');


define("INC_PATH", DOC_ROOT."includes/");
define("INC_URL", SITE_URL."includes/");
define("INC_JS_URL", SITE_URL."includes/js/");
define("FUNCTIONS", INC_PATH."functions.php");

define("MODULE_PATH", DOC_ROOT."modules/");
define("PROCESSES_PATH", DOC_ROOT."processes/");

define("PAGE_PATH", DOC_ROOT."pages/");
//define("PAGE_URL", SITE_URL."pages/");
define("PAGE_URL", SITE_URL."?page=");

define("RESOURCES_PATH", DOC_ROOT."resources/");
define("RESOURCES_URL", SITE_URL."resources/");

define("TEMPLATE", 'default');
define("TEMPLATE_PATH", DOC_ROOT."templates/".TEMPLATE."/");
define("TEMPLATE_URL", SITE_URL."templates/".TEMPLATE."/");

