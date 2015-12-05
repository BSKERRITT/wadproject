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
    echo  "response: ".$name;
  
} else {
    exit('Failed to open facts.xml');
}



    file_put_contents('/home/ubuntu/workspace/facts.xml', $xml->asXML());

if(isset($_SERVER['HTTP_REFERER'])){
    header("Location: " . $_SERVER['HTTP_REFERER']);    
} else {
    echo "An Error";
}


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
    $test = $xml->channel;
    $newChild = $test->addChild('item');
    
    $newChild->addChild('title', $title);
    $newChild->addChild('link', 'https://wadproject-bskerritt.c9users.io/');
    $newChild->addChild('description', $description);
    $newChild->addChild('pubDate', $pubDate);

    //changing the nodes values
    //in this case we are changing the value 
    //of all children called <name>
    foreach ($xml->children() as $child)
        $child->link = "";
        $child->description = "ADDED A NEW FACT!";
        $child->pubDate = date('l dS \of F Y h:i:s A');
} else {
    exit('Failed to open rss.xml');
}
    file_put_contents('/home/ubuntu/workspace/rss.xml', $xml->asXML());
// Load the XML source
$xml = new DOMDocument;
$xml->load('rss.xml');
$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('rss.xsl');
// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules
				
echo $proc->transformToXML($xml);
?>
