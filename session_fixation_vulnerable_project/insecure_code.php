<?php

// Start or resume the session (unsafe)
session_start();

// Set a session variable without regenerating session ID (vulnerable)
$_SESSION['user_id'] = '12345';

echo "Session ID: " . session_id() . "<br>";
echo "Insecurely set user ID: " . $_SESSION['user_id'];

