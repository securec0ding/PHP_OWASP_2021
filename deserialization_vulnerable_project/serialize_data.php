<?php

// Data to be serialized
$data = ['user' => 'admin'];

// Serialize data
$serialized_data = serialize($data);

// Save serialized data to a file
file_put_contents('serialized_data.txt', $serialized_data);

echo "Data serialized and saved to serialized_data.txt";

