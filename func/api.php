<?php
add_action('rest_api_init', 'REST_API_ROUTS');

function REST_API_ROUTS()
{
  register_rest_route(
    'aw-api',
    '/feedback/',
    array(
      'methods' => 'post',
      'callback' => 'aw_form_feedback_api_endpoint_callback',
    )
  );
}
?>