<?php
$pesel = "0 0 2 3 2 5 0 1 6 7 6";
$data = explode(" ",$pesel);
echo "day ".$data[4].$data[5];
echo "month ".$data[1].$data[3];
echo "year 20".$data[0].$data[1];

?>