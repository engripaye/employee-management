<?php
global $api_url;
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle update submission
    $id = intval($_POST["id"]);
    $data = [
        "name" => $_POST["name"],
        "role" => $_POST["role"]
    ];

    $options = [
        "http" => [
            "header" => "Content-Type: application/json\r\n",
            "method" => "PUT",
            "content" => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);

    // Call backend PUT API
    $url = $api_url . "/" . $id;
    $response = file_get_contents($url, false, $context);

    header("Location: list_employees.php");
    exit;
}

// ---- Load existing employee for editing (GET with ?id=XX) ----
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $employee = json_decode(file_get_contents($api_url . "/" . $id), true);
} else {
    die("❌ No employee ID provided");
}
?>

<h2>Update Employee</h2>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $employee['name']; ?>" required><br>
    Role: <input type="text" name="role" value="<?php echo $employee['role']; ?>" required><br>
    <button type="submit">Update</button>
</form>
<a href="list_employees.php">Back</a>
