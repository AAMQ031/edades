
<?php
$feac=$_POST['feac'];
$fecna=$_POST['fecna'];
date("d", strtotime($_feac['feac']));
date("d", strtotime($_fecna['fecna']));



$por=$feac-$fecna;

$p=100/80;

$t=$p*$por;

echo "tu porcentaje de vida es".$t."%";
