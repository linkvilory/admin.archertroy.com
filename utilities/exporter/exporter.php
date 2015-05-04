<?php

$exporter = $_GET["exporter"];

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=exporter.csv");
header("Pragma: no-cache");
header("Expires: 0");

echo $exporter;

?>