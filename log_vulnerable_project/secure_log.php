<?php

// Sensitive information to be logged
$username = "admin";
$password = "password123";

// Log sensitive information securely
log_sensitive_information($username, $password);

function log_sensitive_information($username, $password) {
    // Secure logging (do not write sensitive information to logs)
    echo "Secure Log: Sensitive information not written to logs<br>";
}

