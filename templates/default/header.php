<!doctype html>
<html><head>
    <link rel="icon" type="image/png" href="http://nipunadodan.com/favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Nipuna Dodantenna">
    <meta name="description" content="Experienced Fullstack Web and UX developer who is also a travel buff with a high enthusiasm in travel and landscape photography">
    <meta name="keywords" content="web, ui, ux, developer, php, HTML, HTML5, CSS, CSS3, jQuery, MySQL, Dreamweaver, Photoshop, Illustrator, InDesign">
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
    <script src="<?php echo INC_JS_URL?>scripts.js"></script>
</head>
<body>
