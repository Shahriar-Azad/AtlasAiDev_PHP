<?php
// ------------------------------
// Set a cookie
// ------------------------------
// setcookie(name, value, expire, path)
setcookie("username", "ShahriarAzad", time() + (86400 * 7), "/"); // 86400 = 1 day, lasts for 7 days

// ------------------------------
// Check if cookie is set
// ------------------------------
if (isset($_COOKIE["username"])) {
    echo "Welcome back, " . $_COOKIE["username"] . "!<br>";
} else {
    echo "Hello, guest! Setting your cookie now...<br>";
}

// ------------------------------
// Get cookie value
// ------------------------------
if (isset($_COOKIE["username"])) {
    $user = $_COOKIE["username"];
    echo "Your cookie value is: " . $user . "<br>";
}

// ------------------------------
// Update cookie
// ------------------------------
if (isset($_COOKIE["username"])) {
    setcookie("username", "UpdatedUser", time() + (86400 * 7), "/");
    echo "Cookie updated! New value will be shown on page refresh.<br>";
}

// ------------------------------
// Delete cookie
// ------------------------------
// To delete, set expiration time in the past
if (isset($_GET['delete'])) {
    setcookie("username", "", time() - 3600, "/");
    echo "Cookie deleted successfully!<br>";
}
?>

<!-- Simple HTML buttons -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Cookie Example</title>
</head>
<body>
    <h3>PHP Cookie Example</h3>
    <p>Refresh the page to see the cookie in action.</p>
    <a href="?delete=true">Delete Cookie</a>
</body>
</html>
