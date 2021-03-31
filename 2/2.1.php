<?php
function tablica($index){
	for($i =0; $i < 10; $i++){
        $array[$i] = random_int(0,25);
    }
    echo $array[$index];
}
tablica(9);
?>
