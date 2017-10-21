<?php

       // Установка токена

    $botToken = "475837364:AAFF8qSKY6UQF0ou-zPK37XPuZ3qdDZK9do";
    $website = "https://api.telegram.org/bot".$botToken;

    // Получаем запрос от Telegram 

    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];

    // Получаем внутренний номер чата Telegram и команду, введённую пользователем в   чате 

    $chatId = $message["chat"]["id"];
    $text = $message["text"];

    // Пример обработки команды /start

    if ($text == '/start') {
        $welcomemessage = 'Привет ты звшел сюда, чтобы узнать как выпит ьпика и добраться до дому)';

       // Отправляем сформированное сообщение обратно в Telegram пользователю   

       file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$welcomemessage);    
    }    
?>