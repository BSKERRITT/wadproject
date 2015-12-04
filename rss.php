<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */

$name = $_POST["name"];
$description = $_POST["description"];
$pubDate = $_POST["pubDate"];

if (file_exists('rssfacts.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('rssfacts.xml');

    //adding new child to the xml
    $newChild = $xml->addChild('item');
    $newChild->addChild('name', $name);
    $newChild->addChild('description', $description);
    $newChild->addChild('pubDate', $pubDate);

    //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    foreach ($xml->children() as $child)
        $child->description = "ADDED A NEW FACT!";
        $child->pubDate = getDate();
} else {
    exit('Failed to open rssfacts.xml');
}
    file_put_contents('/home/ubuntu/workspace/rssfacts.xml', $xml->asXML());
    
    writeRSS();
    function writeRSS(){
        if (file_exists('rssfacts.xml')) {
            //loads the xml and returns a simplexml object
            $rssxml = simplexml_load_file('rssfacts.xml');
            $newChild = $rssxml->channel->addChild('item');
            $newChild->addChild('name', $name);
            $newChild->addChild('description', $description);
            $newChild->addChild('pubDate', $pubDate);
            file_put_contents('/home/ubuntu/workspace/rssfacts.xml', $rssxml->asXML());
        }
    }
?>