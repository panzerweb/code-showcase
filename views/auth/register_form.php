<?php
    session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Register Now</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container-lg">
                <h1 class="text-center fw-semibold">Sign Up</h1>
                <?php
                    if (!empty($_SESSION["error"])) {
                        foreach ($_SESSION["error"] as $err) {
                            echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($err) . '</div>';
                        }
                        unset($_SESSION["error"]);
                    }
                ?>
                <div class="row justify-content-center mx-5">
                    <div class="col-lg-4 shadow border border-2 px-3 py-2 rounded-3">
                        <form action="../../auth/register.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    id="username"
                                    aria-describedby="helpId"
                                    placeholder="Enter Username"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    aria-describedby="helpId"
                                    placeholder="Enter Email Address"
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id="password"
                                    aria-describedby="helpId"
                                    placeholder="Enter Password "
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="confirm_password"
                                    id="confirm_password"
                                    aria-describedby="helpId"
                                    placeholder="Confirm Password "
                                    required
                                />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">User Type</label>
                                <select
                                    class="form-select form-select-lg"
                                    name="user_type"
                                    id="user_type"
                                >
                                    <option selected>Select one</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            
                            <input type="submit" name="submit" value="Sign Up" class="btn btn-success w-100 my-1">
                            <p class="text-center">Already have an account? <a href="login_form.php">login now</a></p>

                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
