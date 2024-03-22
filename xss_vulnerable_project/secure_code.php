<?php

// Get the value of 'name' from query parameters safely
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

// Output the sanitized value
echo "Hello, " . htmlspecialchars($name) . "!";

