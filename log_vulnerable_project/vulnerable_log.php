<?php

// Sensitive information to be logged
$username = "admin";
$password = "password123";

// Log sensitive information (vulnerable)
log_sensitive_information($username, $password);

function log_sensitive_information($username, $password) {
    // Vulnerable logging (write sensitive information to logs)
    echo "Vulnerable Log: Username: $username, Password: $password<br>";
}

