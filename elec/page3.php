<h2>3 - La Tension</h2>
Deux atomes s'atirent quand ils ont des charges oppos�es.
Ce sont les atomes ayant une charge positive (exc�s de protons) qui attirent les atomes ayant une charge n�gative (exc�s d'�l�ctrons) pour s'�quilibrer<br/>
(---+) ==> (+++-) <br/>
(--+)  ==> (+++--) <br/>
(-+)  <==> (+++---) <br/>
La tension instaure un courant entre deux charges oppos�es, en raison de leur diff�rence d'�nergie potenitelle<br/>
<strong>V</strong><sub>volt (V)</sub> = <strong>W</strong><sub>joules (J)</sub> / <strong>Q</strong><sub>coulombs (C)</sub><br/>
Un volt est l'�n�rgie divis�e par une charge<br/>
<strong>1 Volt</strong>, est la <em>tension</em>(diff�rence de potentiel) entre <strong>deux points</strong> quand il <em>faut</em><br>
une <strong>�n�rgie de 1 Joule</strong> pour <em>d�placer</em> une <strong>charge d'un coulomb</strong> d'un point � l'autre.<br/>
<h3>TP : Calculer la charge, L'�n�rgie, La tension</h3>
<table>
<tr>
	<td>Tension Volts(V)</td>
	<td><input id="tp2tension" type="text" name="tp2tension" value="1"></td>
	<td><select id="tp2gv"><?php include('./elec/grandeurs.php')?></select></td>
	<td>V</td>
	<td><input type="button" value="CalcV" onclick="tp2_calc_volt()" ></td>
</tr>
<tr>
	<td>Energie Joules(J)</td>
	<td><input id="tp2energie" type="text" name="tp2energie" value="1"></td>
	<td><select id="tp2gw"><?php include('./elec/grandeurs.php')?></select></td>	
	<td>W</td>
	<td><input type="button" value="CalcJ" onclick="tp2_calc_energie()" ></td>
</tr>
<tr>
	<td>Charge Coulombs(C)</td>
	<td><input id="tp2charge" type="text" name="tp2charge" value="1"></td>
	<td><select id="tp2gq"><?php include('./elec/grandeurs.php')?></select></td>
	<td>Q</td>
	<td><input type="button" value="CalcC" onclick="tp2_calc_charge()" ></td>
</tr>	
</table>
