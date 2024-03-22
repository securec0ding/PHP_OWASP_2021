<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
    // Process form submission securely
    echo "Form submitted securely!";
} else {
    echo "Invalid or missing CSRF token!";
}

