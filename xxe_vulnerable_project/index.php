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
    
    // Disable loading of external entities
    libxml_disable_entity_loader(true);

    // Load XML with error handling
    if (!$dom->loadXML($xml, LIBXML_NONET)) {
        echo "Error parsing XML: " . libxml_get_last_error()->message;
        return;
    }
    
    echo $dom->saveXML();
}

