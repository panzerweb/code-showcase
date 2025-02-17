<?php

header("Content-Type: application/json");

session_start();

include '../config/config.php';

$sql = "SELECT * FROM users WHERE user_type = 'user'";
$data = [];
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();