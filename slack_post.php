<?php
function slackpost($text)
{
    $headers = [
        // Bearer以下にAPI keyを入力です
        'Authorization: Bearer ',
        'Content-Type: application/json;charset=utf-8'
    ];

    $url = "https://slack.com/api/chat.postMessage"; //(2)

    //(3)
    $post_fields = [
        "channel" => "api_test",
        "text" => $text,
        "as_user" => true
    ];

    $options = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($post_fields)
    ];

    $ch = curl_init();

    curl_setopt_array($ch, $options);

    $result = curl_exec($ch);

    curl_close($ch);
}
