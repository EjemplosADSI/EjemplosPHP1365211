<?php
// imprime: mysql link
$c = mysql_connect();
echo get_resource_type($c) . "\n";

// imprime: stream
$fp = fopen("foo", "w");
echo get_resource_type($fp) . "\n";

// imprime: domxml document
$doc = new_xmldoc("1.0");
echo get_resource_type($doc->doc) . "\n";
?>