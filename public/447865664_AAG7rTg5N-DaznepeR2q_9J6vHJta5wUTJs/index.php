<?php
    set_time_limit(0);
    //require_once "createlog.php";

    // Установка токена

    $botToken = "447865664:AAG7rTg5N-DaznepeR2q_9J6vHJta5wUTJs";
    $website = "https://api.telegram.org/bot".$botToken;

    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];
    $chatId = $message["chat"]["id"];
    $fromId = $message["from"]["id"];
    $firstName = $message["from"]["first_name"];
    $lastName = $message["from"]["last_name"];
    $username = $message["from"]["username"];
    $firstNameChat = $message["chat"]["first_name"];
    $lastNameChat = $message["chat"]["last_name"];
    $usernameChat = $message["chat"]["username"];
    $text = $message["text"];
$chatId = '139690170';
$text='Сломалось, чиню';
$text=urlencode($text);
$a = $website."/sendmessage?chat_id=".$chatId."&text=$text";    
$file = file_get_contents($a);
?>

