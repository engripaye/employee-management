<?php
global $api_url;
include 'config.php';

if(isset($Get['id'])) {
    $id = $_GET['id'];

    // create DELETE request
    $options = [
        "http" => [
            "header" => "Content-Type: application/json\r\n",
            "method" => "DELETE"
        ]
    ];

    $context = stream_context_create($options);
    $url = $api_url . "/" . $id; // e.g., http://localhost:8080/employees/{id}

    $result = file_get_contents($url, false, $context);

    // Redirect back to list page after deletion
    header("Location: list_employee.php");
    exit();
} else {
    echo "No employee ID provided";
}
?>
