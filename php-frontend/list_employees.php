<?php
global $api_url;
include 'config.php';

$response = file_get_contents($api_url);
$employees = json_decode($response, true);
?>

<h2>Employee List</h2>
<ul>
    <?php foreach ($employees as $emp): ?>
        <li>
            <?php echo $emp['name'] . " - " . $emp['role']; ?>
            <a href="update_employee.php?id=<?php echo $emp['id']; ?>">Update</a>
            <a href="delete_employee.php?id=<?php echo $emp['id']; ?>"
               onclick="return confirm('Are you sure?');">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
<a href="index.php">Back</a>
