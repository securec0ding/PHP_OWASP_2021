<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission without CSRF protection (vulnerable)
    echo "Form submitted without CSRF protection!";
} else {
    // Generate CSRF token
    $csrf_token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $csrf_token;

    // Display form with CSRF token
    echo "<form action='index.php' method='post'>";
    echo "<input type='hidden' name='csrf_token' value='$csrf_token'>";
    echo "<input type='submit' value='Submit Form'>";
    echo "</form>";
}

