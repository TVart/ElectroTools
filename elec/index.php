<!DOCTYPE html>
<html>
  <head>
    <title>Elec Tools</title>
  </head>
  <body>
	<h1>Elec Tools</h1>
	<h2>1 - Couche de valence</h2>
	<p>La conductiité d'un matériau est proportionnel à la quantité d'électron libre que contient l'atome dans la couche de valence</p>
	<h3>TP : Calcul du nombre d'éléctrons de la couche de valence</h3>
	<?php
	include('./elements.php');
	?>
	<h2>2 - La charge éléctrique</h2>
	<p>Dans un atome, à l'état neutre il y a autant d'éléctrons (charge négative) que de protons (charge positive)<br/>
	Dans un matériau, la charge est négative quand il y a un excès d'électrons, sinon la charge est positive (excès de protons).<br/>
	La charge éléctrique notée <em>C</em>, est mesurée en <strong>Coulomb</strong> (<em>Q</em>) <br/>
	1 Coulomb  => 6,25 x 10<sup>18</sup> electrons<br/>
	1 Electron => 1,6 x 10<sup>-19</sup>C 
	</p>
	<h3>TP : Calculer la charge total <em>Q</em> d'un nombre <em>E</em> d'éléctrons</h3>
	<em>Q</em> = <em>N</em> / 6,25 x 10<sup>18</sup><br/>
	<em>E</em> = <em>Q</em> x 6,25 x 10<sup>18</sup><br/>
	<table><tr>
		<td>E : </td>
		<td><input id="tp1electrons" type="text" name="tp1electrons" value="1"></td>
		<td> = </td>
		<td>Q : </td>
		<td><input id="tp1coulombs" type="text" name="tp1coulombs" value=""></td>
	</tr></table>	
	<input type="button" value="CalculerC" onclick="tp1_calc_coulomb();">
	<input type="button" value="CalculerE" onclick="tp1_calc_electrons();">
	<input type="button" value="Notation Sci" onclick="tp1_notation_scientifique();">
	
	<h2>3 - Tension</h2>
	Deux atomes s'atirent quand ils ont des charges opposées.
	Ce sont les atomes ayant une charge positive (excès de protons) qui attirent les atomes ayant une charge négative (excès d'éléctrons) pour s'équilibrer<br/>
	(---+) ==> (+++-) <br/>
	(--+)  ==> (+++--) <br/>
	(-+)  <==> (+++---) <br/>
	La tension instaure un courant entre deux charges opposées, en raison de leur différence d'énergie potenitelle<br/>
	<strong>V</strong><sub>volt (V)</sub> = <strong>W</strong><sub>joules (J)</sub> / <strong>Q</strong><sub>coulombs (C)</sub><br/>
	Un volt est l'énérgie divisée par une charge<br/>
	<strong>1 Volt</strong>, est la <em>tension</em>(différence de potentiel) entre <strong>deux points</strong> quand il <em>faut</em><br>
	une <strong>énérgie de 1 Joule</strong> pour <em>déplacer</em> une <strong>charge d'un coulomb</strong> d'un point à l'autre.<br/>
	<h3>TP : Calculer la charge, L'énérgie, La tension</h3>
	<table>
	<tr>
		<td>Tension Volts(V)</td>
		<td><input id="tp2tension" type="text" name="tp2tension" value="1"></td>
		<td>V</td>
		<td><input type="button" value="CalcV" onclick="tp2_calc_volt()" ></td>
	</tr>
	<tr>
		<td>Energie Joules(J)</td>
		<td><input id="tp2energie" type="text" name="tp2energie" value="1"></td>
		<td>W</td>
		<td><input type="button" value="CalcJ" onclick="tp2_calc_energie()" ></td>
	</tr>
	<tr>
		<td>Charge Coulombs(C)</td>
		<td><input id="tp2charge" type="text" name="tp2charge" value="1"></td>
		<td>Q</td>
		<td><input type="button" value="CalcC" onclick="tp2_calc_charge()" ></td>
	</tr>	
	</table>
	<h2>3 - Le courant</h2>
	Dans un matériau conducteurs les électrons libres se déplacent aléatoirement<br/>
	<strong>[~'`~< > -> ^]</strong><br/>
	Quand une source de tension est appliquée à ces deux pôles, en raison de la différence de potentiel de ces extrémité<br/>
	les électrons se mettent à se déplacer de l'extrémité négative vers l'extrémité positive. (L'excès de proton, attirent les électrons pour se compenser)<br/>
	<strong>(-)[->->->->->->](+)</strong><br/>
	<strong>Le courant</strong> (mesuré en Ampère [A]) est donc le taux <em>d'écoulement</em> d'une certain quantité de <strong>charge</strong> ( nombre d'électrons ) durant une <strong>temps</strong> donné.<br/>
	<strong>I</strong><sub>Courant (A)</sub> = <strong>Q</strong><sub>Charge (C)</sub> / <strong>T</strong><sub>Temps (s)</sub><br/>
	1 Ampère (A) est l'intensité de courant qu'on obtient quand une charge de 1  coulomb( C ) est déplacé à travers un conducteur en 1 seconde (s)<br/>
	<h3>TP : Calculer le courant, La charge, Le temps</h3>
	<table>
	<tr>
		<td>Courant Ampère(A)</td>
		<td><input id="tp3courant" type="text" name="tp3courant" value="1"></td>
		<td>I</td>
		<td><input type="button" value="CalcA" onclick="tp3_calc_courant()" ></td>
	</tr>
	<tr>
		<td>Temps secondes(s)</td>
		<td><input id="tp3temps" type="text" name="tp3temps" value="1"></td>
		<td>T</td>
		<td><input type="button" value="CalcT" onclick="tp3_calc_temps()" ></td>
	</tr>
	<tr>
		<td>Charge Coulombs(C)</td>
		<td><input id="tp3charge" type="text" name="tp3charge" value="1"></td>
		<td>Q</td>
		<td><input type="button" value="CalcC" onclick="tp3_calc_charge()" ></td>
	</tr>	
	</table>
	<h2>4 - La résistance</h2>
	En fonction du matériau utilisé, l'écoulement des éléectrons est plus ou moins freiné par la résistance du matériau en question. (Collision des atomes)<br/>
	
  </body>
  
<script>
//<![CDATA[
//TP1
function is_int(value){ 
  if((parseFloat(value) == parseInt(value)) && !isNaN(value)){
      return true;
  } else { 
      return false;
  } 
}

function tp1_notation_scientifique(){
	var e = document.getElementById('tp1electrons').value;
	var div = 1;
	var r = 0;
	var cpp = 0;
	do{
		div = div * 10;
		cpp ++;
		r =  e / div;
	}while(is_int(r));
	
	document.getElementById('tp1electrons').value = r+' x 10^'+cpp; 
}

function tp1_calc_coulomb(){
	var n = document.getElementById('tp1electrons').value;
	document.getElementById('tp1coulombs').value = (n / (6.25 * Math.pow(10, 18))); 
}

function tp1_calc_electrons(){
	var n = document.getElementById('tp1coulombs').value;
	document.getElementById('tp1electrons').value = (n * (6.25 * Math.pow(10, 18))); 
}

//TP2
function tp2_calc_volt(){
	var j = document.getElementById('tp2energie').value;
	var c = document.getElementById('tp2charge').value;
	document.getElementById('tp2tension').value = (j / c);
}

function tp2_calc_energie(){
	var v = document.getElementById('tp2tension').value;
	var c = document.getElementById('tp2charge').value;
	document.getElementById('tp2energie').value = (v * c);
}

function tp2_calc_charge(){
	var v = document.getElementById('tp2tension').value;
	var j = document.getElementById('tp2energie').value;
	document.getElementById('tp2charge').value = (j / v);
}

//TP3
function tp3_calc_courant(){
	var t = document.getElementById('tp3temps').value;
	var c = document.getElementById('tp3charge').value;
	document.getElementById('tp3courant').value = (c / t);
}

function tp3_calc_temps(){
	var i = document.getElementById('tp3courant').value;
	var c = document.getElementById('tp3charge').value;
	document.getElementById('tp3temps').value = (c / i);
}

function tp3_calc_charge(){
	var i = document.getElementById('tp3courant').value;
	var t = document.getElementById('tp3temps').value;
	document.getElementById('tp3charge').value = (i * t);
}
//]]>
</script>  
</html>	