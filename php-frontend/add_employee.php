<?php
global $api_url;
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "name" => $_POST["name"],
        "role" => $_POST["role"]
    ];

    $options = [
        "http" => [
            "header" => "content-Type: application/json\r\n",
            "method" => "POST",
            "content" => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);
    file_get_contents($api_url, false, $context);
    header("Location: list_employees.php");
}

?>

<h2>Add Employee</h2>
<form method="post">
    Name: <input type="text" name="name" required><br>
    Role: <input type="text" name="name" required><br>
    <button type="submit">Add</button>
</form>
<a href="index.php">Back</a>
