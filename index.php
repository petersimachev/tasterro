<?php

       // ��������� ������

    $botToken = "475837364:AAFF8qSKY6UQF0ou-zPK37XPuZ3qdDZK9do";
    $website = "https://api.telegram.org/bot".$botToken;

    // �������� ������ �� Telegram 

    $content = file_get_contents("php://input");
    $update = json_decode($content, TRUE);
    $message = $update["message"];

    // �������� ���������� ����� ���� Telegram � �������, �������� ������������� �   ���� 

    $chatId = $message["chat"]["id"];
    $text = $message["text"];

    // ������ ��������� ������� /start

    if ($text == '/start') {
        $welcomemessage = '������ �� ����� ����, ����� ������ ��� ����� ����� � ��������� �� ����)';

       // ���������� �������������� ��������� ������� � Telegram ������������   

       file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$welcomemessage);    
    }    
?>