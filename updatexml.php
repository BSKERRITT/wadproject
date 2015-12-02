<?php
$name = $_POST["name"];
$fact = $_POST["fact"];    
    
    $facts = array(
        'name' => $_POST['name'],
        'fact' => $_POST['fact'],
    );
if (file_exists('facts.xml')) {        
    $doc = new DOMDocument();
    $doc->load( 'facts.xml' );
    
    $doc->formatOutput = true;
    $r = $doc->getElementsByTagName("genre")->item(4);
    
    $b = $doc->createElement("facts");
    
    $name = $doc->createElement("name");
    $name->appendChild(
        $doc->createTextNode( $facts["name"] )
    );
    $b->appendChild( $name );
    
    $fact = $doc->createElement("fact");
    $fact->appendChild(
        $doc->createTextNode( $facts["fact"] )
    );
    $b->appendChild( $fact );
    
    $r->appendChild( $b );
        
    $doc->save("facts.xml"); 
    
    header("Location: {$_SERVER['HTTP_REFERER']}");
}else{
    exit('Failed to open facts.xml.');
}
?>