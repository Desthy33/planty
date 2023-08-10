<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="https://fonts.googleapis.com/" type="text/css" rel="stylesheet"> 
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" role="banner">
    <div class="container">
        <a href="index.php"><img src="./img/logo.png" class="logo" alt="logo planty"></a> 
        <nav>
            <a href="#">Nous rencontrer</a>
            <a href="#">Admin</a>
        </nav>
        <button class="nav">Commander</button>
    </div>

   


</header>
<div id="container">
<main id="content" role="main">