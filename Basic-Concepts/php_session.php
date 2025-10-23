<?php
// ------------------------------
// Start a session
// ------------------------------
session_start();

// ------------------------------
// Set session variables
// ------------------------------
if (!isset($_SESSION["username"])) {
    $_SESSION["username"] = "ShahriarAzad";
    $_SESSION["role"] = "Admin";
    echo "Session variables are set.<br>";
} else {
    echo "Welcome back, " . $_SESSION["username"] . "!<br>";
    echo "Your role is: " . $_SESSION["role"] . "<br>";
}

// ------------------------------
// Update session variable
// ------------------------------
if (isset($_GET['update'])) {
    $_SESSION["username"] = "UpdatedUser";
    echo "Session variable updated! New value: " . $_SESSION["username"] . "<br>";
}

// ------------------------------
// Destroy the session
// ------------------------------
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    echo "Session destroyed successfully!<br>";
}
?>

<!-- Simple HTML buttons -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Example</title>
</head>
<body>
    <h3>PHP Session Example</h3>
    <p>Refresh or navigate to see session data in action.</p>

    <a href="?update=true">Update Session</a> |
    <a href="?logout=true">Destroy Session</a>
</body>
</html>
