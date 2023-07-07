<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<?php wp_head(); ?>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="">
</head>

<body <?php body_class() ?>>
  <?php wp_body_open();
  include_once("inc/header/main-header.php");
  ?>
  <main class="aw-main">