<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<?php wp_head(); ?>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500&display=swap"
    rel="stylesheet">
</head>

<body <?php body_class() ?>>
  <?php wp_body_open();
  include_once("inc/header/main-header.php");
  ?>
  <main class="aw-main">