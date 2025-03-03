<?php
require "C:/xampp/htdocs/ecommerce/user/backend/include.php/db.php";

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// ✅ Correct Query
$query = "SELECT * FROM category";
$result = $conn->query($query);

$categories = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}

// ✅ JSON Output with `exit()`
echo json_encode(["categories" => $categories]);
exit();
?>
