<?php
session_start();

include '../config/config.php';

$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $user_type = $_POST["user_type"];

    // Check for empty fields
    if (empty($username)) {
        $error[] = "Username is required.";
    }
    if (empty($email)) {
        $error[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Invalid email format.";
    }
    if (empty($password)) {
        $error[] = "Password is required.";
    }
    if (empty($confirm_password)) {
        $error[] = "Confirm Password is required.";
    }
    // Check if passwords match
    if ($password !== $confirm_password) {
        $error[] = "Passwords do not match.";
    }
    if (strlen($password) < 5) {
        $error[] = "Password must be at least 5 characters long.";
    }

    if (!empty($error)) {
        $_SESSION["error"] = $error;
        header("location: ../views/register_form.php");
        exit;
    }else{
        // Check if the email already exists
        $findExistingQuery = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($findExistingQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION["error"] = ["User already exists."];
            header("location: ../views/register_form.php");
            exit;
        }else{
            // Insert user into the database
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $currentTimestamp = date('Y-m-d H:i:s');
            $insertQuery = "INSERT INTO users (username, email, password, user_type, created_at) VALUES (?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sssss", $username, $email, $hashedPassword, $user_type, $currentTimestamp);

            if ($stmt->execute()) {
                header('Location: ../views/login_form.php');
                exit;
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
        
    }
}

unset($_SESSION["error"]);

