<?php

// Start or resume the session
session_start();

// Regenerate session ID to prevent session fixation
session_regenerate_id();

// Set a session variable securely
$_SESSION['user_id'] = '12345';

echo "Session ID: " . session_id() . "<br>";
echo "Securely set user ID: " . $_SESSION['user_id'];

