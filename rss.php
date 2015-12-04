<?php

/*
 * PHP SimpleXML
 * Loading a XML from a file, adding new elements and editing elements
 */

$title = $_POST["title"];
$link = $_POST["link"];
$description = $_POST["description"];
$pubDate = $_POST["pubDate"];

if (file_exists('rss.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('rss.xml');

    //adding new child to the xml
    $newChild = $xml->addChild('item');
    $newChild->addChild('title', $title);
    $newChild->addChild('link', $link);
    $newChild->addChild('description', $description);
    $newChild->addChild('pubDate', $pubDate);

    //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    foreach ($xml->children() as $child)
        $child->link = " ";
        $child->description = "ADDED A NEW FACT!";
        $child->pubDate = date('l dS \of F Y h:i:s A');
} else {
    exit('Failed to open rss.xml');
}
    file_put_contents('/home/ubuntu/workspace/rss.xml', $xml->asXML());
?>