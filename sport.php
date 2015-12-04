<?php
// Load the XML source
$xml = new DOMDocument;
$xml->load('facts.xml');
$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('sport.xsl');
// Configure the transformre2 act
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules
				
echo $proc->transformToXML($xml);
?>