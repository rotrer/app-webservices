<?php
$xml = Xml::fromArray(array('data' => $regiones));
echo $xml->asXML();
?>