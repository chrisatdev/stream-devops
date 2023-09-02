<?php
require_once "functions.php";

$MESSAGE = [
  "user_pass_failed" => "Username or password is invalid!",
  "user_pass_success" => "OK SUCCESS LOGIN"
];
$RESPONSE = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_POST['InputEmail']) || empty($_POST['InputPassword'])) {
    $RESPONSE = $MESSAGE['user_pass_failed'];
    exit;
  } else {
    $RESPONSE = isValidEmail($_POST['InputEmail']) ? $MESSAGE['user_pass_success'] : $MESSAGE['user_pass_failed'];
  }
}

header("Content-Type: text/plain; charset=utf-8");
echo $RESPONSE;
