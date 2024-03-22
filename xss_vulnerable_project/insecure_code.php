<?php

// Get the value of 'name' from query parameters (unsafe)
$name = $_GET['name'];

// Output the unsanitized value
echo "Hello, $name!";

