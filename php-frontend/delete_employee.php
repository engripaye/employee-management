<?php
global $api_url;
include 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // make sure it's a number

    $options = [
        "http" => [
            "header" => "Content-Type: application/json\r\n",
            "method" => "DELETE"
        ]
    ];

    $context = stream_context_create($options);

    // Call the backend DELETE API with the ID
    $url = $api_url . "/" . $id;
    $response = file_get_contents($url, false, $context);

    // Redirect back to list
    header("Location: list_employees.php");
    exit;
} else {
    echo "❌ No employee ID provided";
}
