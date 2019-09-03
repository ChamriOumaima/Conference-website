<?php
 if(isset($_POST['attestation'])) {

$xml = new DOMDocument("1.0","UTF-8");
$xml->load("form1.xml");

$xsl = new DOMDocument("1.0","UTF-8");
$xsl->load("thereal.xsl");

$proc = new XSLTProcessor;

$proc->importStyleSheet($xsl);
$proc->setParameter('','id',$_POST['nom']);

echo $proc->transformToXML($xml);
}
 ///////////////////////////////////////////////////
 if(isset($_POST['reçu'])) {

$xml = new DOMDocument("1.0","UTF-8");
$xml->load("form1.xml");

$xsl = new DOMDocument("1.0","UTF-8");
$xsl->load("therealtwo.xsl");

$proc = new XSLTProcessor;

$proc->importStyleSheet($xsl);
$proc->setParameter('','id',$_POST['nom']);

echo $proc->transformToXML($xml);
}
////////////////////////////////////////////////////
 if(isset($_POST['badge'])) {

$xml = new DOMDocument("1.0","UTF-8");
$xml->load("form1.xml");

$xsl = new DOMDocument("1.0","UTF-8");
$xsl->load("thereal3.xsl");

$proc = new XSLTProcessor;

$proc->importStyleSheet($xsl);
$proc->setParameter('','id',$_POST['nom']);

echo $proc->transformToXML($xml);
}
?>