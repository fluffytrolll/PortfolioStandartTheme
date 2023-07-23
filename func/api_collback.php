<?php
function aw_form_feedback_api_endpoint_callback($request)
{
  // Получаем данные из запроса API
  // $params = $request->get_params();

  // Получаем значения полей из данных запроса
  $name = sanitize_text_field($_POST['name']);
  $email = sanitize_email($_POST['email']);
  $message = sanitize_textarea_field($_POST['message']);

  // Проверяем, заполнены ли обязательные поля
  if (empty($name) || empty($email) || empty($message)) {
    $data = array('status' => '400');
  } else {
    // Формируем заголовки для письма
    $headers = array(
      'From: ' . $name . ' <' . $email . '>',
      'Content-Type: text/html; charset=UTF-8'
    );

    // Формируем тему письма
    $subject = 'Письмо от ' . $name;

    // Формируем тело письма
    $body .= '<p><strong>Имя:</strong> ' . $name . '</p>';
    $body .= '<br/><p><strong>Email:</strong> ' . $email . '</p>';
    $body .= '<br/><p><strong>Сообщение:</strong></p>';
    $body .= '<br/><p>' . $message . '</p>';

    // Отправляем письмо
    $result = wp_mail('feedback@aw.com', $subject, $body, $headers);

    // Проверяем, успешно ли отправлено письмо
    if ($result) {
      $data = array('status' => '200');
    } else {
      $data = array('status' => '400');
    }
  }

  // Возвращаем ответ в формате JSON
  return new WP_REST_Response($data, 200);
}

?>