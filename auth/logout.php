<?php

// Start the session to access session variables
session_start();
session_unset();
session_destroy();

header("Location: ../views/login_form.php");
