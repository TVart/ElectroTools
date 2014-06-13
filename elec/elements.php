<?php
$elements = array(
	'Cuivre' => array('cu', '29')
);
foreach($elements as $k => $v){
	echo "Nom : ".$k."<br/>";
	echo "Symbole : ".$v[0]."<br/>";
	echo "Numero atomique : ".$v[1]."<br/>";
	echo "Electons de la couche de valence : ".get_couche_valence($v[1])."<br/>";
}

function get_couche_valence($v){
	$r = 0;
	$c = 1;
	do{
		$c++;			
		$r = 2*pow($c, 2);
		//echo $c." - ".$r."<br/>";
	}while(2*pow($c, 2) < $v);
	return ($r-$v);	
}
?>
