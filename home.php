<?php
/*
Template Name: Home
Template Post Type: post, page, product
*/

http_response_code(200);

get_header();

include_once("inc/offer/offer-block.php");
include_once("inc/about/about-block.php");
?>

<section class="aw-works"></section>
<section class="aw-about"></section>
<section class="aw-posts"></section>
<section class="aw-contacts"></section>

<?php

get_footer();

?>