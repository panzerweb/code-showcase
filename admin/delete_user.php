<?php
header("Content-Type: application/json");
session_start();
include '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data["id"])) {
        echo json_encode(["error" => "User ID is missing."]);
        exit();
    }

    $userId = intval($data["id"]);

    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        echo json_encode(["message" => "User deleted successfully."]);
    } else {
        echo json_encode(["error" => "Failed to delete user."]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["error" => "Invalid request method."]);
}

