<?php

session_start();

include '../config/config.php';

$error = [];

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $findQuery = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($findQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            $_SESSION["user_type"] = $row["user_type"];

            // Redirect based on user type
            switch ($row["user_type"]) {
                case "admin":
                    header("Location: ../views/admin_page.php");
                    break;
                case "user":
                    header("Location: ../views/user_page.php");
                    break;
                default:
                    $error[] = "Invalid user type.";
            }
            exit;
        } else {
            $error[] = "Invalid password.";
        }
    } else {
        $error[] = "User not found.";
    }

    // Display errors if any
    if (!empty($error)) {
        $_SESSION["error"] = $error;
        header("location: ../views/login_form.php");
        exit;
    }

}
