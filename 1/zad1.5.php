<?php
function pProstkat($bok1, $bok2){
	$poleProstkata = $bok1*$bok2;
return $poleProstkata;
}
function pTrojkat($podstawa, $wysokosc){
	$poleTrojkata = ($podstawa * $wysokosc)/2;
	return $poleTrojkatal;
}
function pTrapez ($podstawa1, $podstawa2, $wyskosc){
	$poleTrapezu = (($podstawa1 + $podstawa2) * $wyskosc)/2;
	return $poleTrapezu;
}
$figura = 'trapez';
switch($figura){
	case 'trojakt':
		echo pTrojkat(2, 4);
		break;
	case 'prostakat':
		echo pProstkata(2,4);
		break;
    case 'trapez':
		echo pTrapez(2,4,8);
		break;
	default:
		echo "blad";
}

?>