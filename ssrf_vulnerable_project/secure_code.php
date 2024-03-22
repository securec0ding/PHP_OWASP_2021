<?php

// Get the value of 'url' from query parameters safely
$url = filter_input(INPUT_GET, 'url', FILTER_VALIDATE_URL);

if ($url !== false) {
    // Perform a request only if the URL is valid
    $response = file_get_contents($url);
    echo "Response: " . htmlspecialchars($response);
} else {
    echo "Invalid URL!";
}

