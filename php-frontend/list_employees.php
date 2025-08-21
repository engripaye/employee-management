<?php
global $api_url;
include 'config.php';

$response = file_get_contents($api_url);
$employees = json_decode($response, true);
?>

<h2>Employee List</h2>
<ul>
    <?php foreach ($employees as $emp): ?>
    <Li><?php echo $emp['name'] . " - " . $emp['role']; ?></Li>
    <?php endforeach; ?>
</ul>
<a href="index.php">Back</a>
