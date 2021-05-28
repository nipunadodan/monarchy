<!doctype html>
<html><head>
    <link rel="icon" type="image/png" href="http://nipunadodan.com/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nipuna Dodantenna">
    <meta name="description" content="A simple algorithm to determine the line of succession of a Monarchy.">
    <meta name="keywords" content="monarchy, line of succession, monarch, heirs, british monarchy, king, queen, price, princess, duke, viscount, earl, prince of wales, duke of edinburgh, earl of wessex, princess royal">
    <meta name="theme-color" content="#1f89e4" />

    <title><?php echo SITE_NAME?></title>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500|Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo TEMPLATE_URL?>css/line-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo TEMPLATE_URL ?>css/styles.css" rel="stylesheet" type="text/css">

    <script>var site_url = '<?php echo SITE_URL ?>'</script>
    <?php
    if(!PRODUCTION){
        echo '<script>const debug = true;</script>';
    }else{
        echo '<script>const debug = false;</script>';
    }
    ?>
    <script src="<?php echo TEMPLATE_URL?>js/jquery.min.js"></script>
    <script src="<?php echo SITE_URL?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo TEMPLATE_URL?>js/scripts.js"></script>
    <script src="<?php echo INC_JS_URL?>websql.js"></script>
    <script src="<?php echo INC_JS_URL?>scripts.js"></script>
</head>
<body>
