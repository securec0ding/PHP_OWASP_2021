<?php

// Get the value of 'url' from query parameters (unsafe)
$url = $_GET['url'];

// Perform a request without validation (vulnerable)
$response = file_get_contents($url);
echo "Response: " . htmlspecialchars($response);

