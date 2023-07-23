<?php
/*
Template Name: Home
Template Post Type: post, page, product
*/

http_response_code(200);

get_header();

include_once("inc/offer/offer-block.php");
include_once("inc/about/about-block.php");
include_once("inc/works/works-block.php");
include_once("inc/posts/posts-block.php");
include_once("inc/contacts/contacts-block.php");

get_footer();

?>