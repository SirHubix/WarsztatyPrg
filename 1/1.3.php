<?php
$zdanie = "nie pij piwa specjal";
$docenzury = array("nie","piwa");
$gwiazdki = "***";
$cenzura = str_replace($docenzury,$gwiazdki,$zdanie);
echo $cenzura;
?>