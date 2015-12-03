<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */
//get author from form
$name = $_POST["name"];
$fact = $_POST["message"];

if (file_exists('facts.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('facts.xml');

    //adding new child to the xml
    $newChild = $xml->genre->addChild('facts');
    $newChild->addChild('name', $name);
    $newChild->addChild('fact', $fact);
  
} else {
    exit('Failed to open facts.xml.');
}
    file_put_contents('/home/ubuntu/workspace/facts.xml', $xml->asXML());
?>