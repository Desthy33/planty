<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width" />
<title></title>
<link href="https://fonts.googleapis.com/" type="text/css" rel="stylesheet"> 
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="header" role="banner">
    <div class="container">
        <a href="index.php"><img src="http://localhost:8888/Planty/wp-content/uploads/2023/08/Logo-source.png" class="logo" alt="logo planty"></a>
        <nav>
            <a href="#" class="hover"><p><?php wp_nav_menu(["menu"]) ?></p></a>
            <a href="#"><p>Admin</p></a>
            <button class="btn-nav">Commander</button>
        </nav>
    </div>
</header>
<div id="container">
<main id="content" role="main" class="main">