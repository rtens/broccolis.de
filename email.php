<?php

$to      = 'mail@broccolis.de';
$subject = '[web-form] Neue Nachrticht von ' . $_REQUEST['name'];
$message = $_REQUEST['message'];
$headers = 'From: mail@broccolis.de' . "\r\n" .
    'Reply-To: ' . $_REQUEST['name'] . ' <' . $_REQUEST['email'] . '>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo str_replace('value="Send"', 'value="Verschickt"', file_get_contents(__DIR__ . '/index.html'));
