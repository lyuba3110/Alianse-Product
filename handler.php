<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "7011989404:AAGmT2iGa-GfFJwgGdKpXMJT0Q41AGiXykg";
$chat_id = "-4676621512";

$FormData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($FormData as $key => $value){
  $text .= $key."<b>".urlencode($value) ."</b>"."%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id{$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else { 
  echo "Error";
}
