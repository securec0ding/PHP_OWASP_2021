<?php

// Load serialized data from file
$serialized_data = file_get_contents('serialized_data.txt');

// Secure deserialization with type checking
$data = @unserialize($serialized_data, ['allowed_classes' => false]);

// Check if deserialization was successful
if ($data === false) {
    echo "Error occurred during deserialization.";
} else {
    echo "Data deserialized securely: ";
    print_r($data);
}

