<!DOCTYPE html>
<html lang="en">
<head>
    <meta <?php bloginfo('charset');?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
</head>
<body>
    <div id="site_container">
<nav id="top-navi">
<?php
$args = ['theme_location' => 'primary' ];
wp_nav_menu($args); ?>


</nav>
 <header id="site-header">
    <h1>Friends of Nature Espoo</h1>

 </header>
