<?php

// Define the OSCommand class
class OSCommand {
    public $command;
}

$serialized_data = '{"command": "ls -la /tmp/"}';

// Insecure deserialization
$data = json_decode($serialized_data);

// Check if deserialization was successful
if ($data !== null && is_object($data) && isset($data->command)) {
    // Execute the command
    echo "Executing command: " . $data->command . "\n";
    echo shell_exec($data->command);
} else {
    echo "Deserialization failed.\n";
}
