<?php
function kostka($rzuty){
    for ($i=1; $i<=$rzuty; $i++){
        $tab[$i] = rand(1,6);
        echo $tab[$i] . " ";
    }
}
kostka(5);

?>
