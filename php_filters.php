<?php
// ------------------------------
// PHP FILTER EXAMPLES
// ------------------------------

// Example 1: Sanitize a string
$str = "<h1>Hello World!</h1>";
$cleanStr = filter_var($str, FILTER_SANITIZE_STRING);
echo "Sanitized string: $cleanStr <br><br>";

// Example 2: Validate an integer
$int = "100";
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "$int is a valid integer.<br><br>";
} else {
    echo "$int is NOT a valid integer.<br><br>";
}

// Example 3: Validate an email
$email = "test@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email address.<br><br>";
} else {
    echo "$email is NOT valid.<br><br>";
}

// Example 4: Sanitize an email
$dirtyEmail = "john..doe@@example.com";
$cleanEmail = filter_var($dirtyEmail, FILTER_SANITIZE_EMAIL);
echo "Sanitized email: $cleanEmail <br><br>";

// Example 5: Validate a URL
$url = "https://www.php.net";
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo "$url is a valid URL.<br><br>";
} else {
    echo "$url is NOT a valid URL.<br><br>";
}

// Example 6: Sanitize a URL
$dirtyUrl = "https://www.php.net/?q=<script>alert(1)</script>";
$cleanUrl = filter_var($dirtyUrl, FILTER_SANITIZE_URL);
echo "Sanitized URL: $cleanUrl <br><br>";

// Example 7: Validate IP address
$ip = "192.168.0.1";
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "$ip is a valid IP address.<br><br>";
} else {
    echo "$ip is NOT valid.<br><br>";
}

// Example 8: Using filter_input() to get user data safely
// (Only works when data is passed via a form or query string)
if (isset($_GET['age'])) {
    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
    if ($age !== false && $age >= 18) {
        echo "Your age is $age — You are eligible.<br><br>";
    } else {
        echo "Invalid age or under 18.<br><br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Filters Example</title>
</head>
<body>
    <h3>PHP Filter Example</h3>
    <form method="get">
        Enter your age: <input type="text" name="age">
        <input type="submit" value="Check Age">
    </form>
</body>
</html>
