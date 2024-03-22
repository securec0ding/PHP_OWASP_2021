<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Vulnerable XML Parsing:<br>";
parseXML('vulnerable_xml.xml');

echo "<br><br>Secure XML Parsing:<br>";
parseXML('secure_xml.xml');

function parseXML($file) {
    $xml = file_get_contents($file);
    $dom = new DOMDocument();

    // Enable loading of external entities
    $loadEntities = LIBXML_DTDLOAD | LIBXML_NOERROR | LIBXML_NOENT | LIBXML_XINCLUDE;
    $dom->loadXML($xml, $loadEntities);

    // Check for parsing errors
    $errors = libxml_get_errors();
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "Error parsing XML: $error->message<br>";
        }
        libxml_clear_errors();
        return;
    }

    echo $dom->saveXML();
}

