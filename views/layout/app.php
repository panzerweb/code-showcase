<?php
    session_start();

    if (!isset($_SESSION["username"])) {
        // Redirect to login page if the user is not logged in
        header("Location: ../views/login_form.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Admin Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../resources/css/app.css">
        <script src="../../node_modules/axios/dist/axios.min.js"></script>

    </head>

    <body onload="fetchData()">
        <header>
            <!-- place navbar here -->
            <div class="sidebar">
                <div class="text-center mb-3">
                    <h4>My Dashboard</h4>
                </div>
                <?php
                    if ($_SESSION["user_type"] == "admin") {
                        echo 
                        '
                            <a href="./users.php"><i class="fa-solid fa-layer-group"></i> Users</a>
                        ';
                    }
                ?>
                <a href="./project.php"><i class="fa-solid fa-splotch"></i> Projects</a>
                <a href="#"><i class="fa-solid fa-code-branch"></i> Learn Code</a>
                <a href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>

            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="./admin_page.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-user"></i> <?php  echo htmlspecialchars($_SESSION["username"]) ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>