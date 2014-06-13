<h2>6 - La Puissance</h2>
Lorsqu'un courant traverse une résistance, de l'énérgie sous forme de chaleur ou de lumière est dégagée.
La quantité d'énéergie dégagée ou consommée pour déplacer des coulombs à travers un matriau resistant durant un certain temps<br/>
est appelée <strong>Puissance</strong> noté <em>P</em>
<h3>Calculer la Puissance (P  = W / t)</h3>
<table>
<tr>
	<td>Puissance Watt (W)</td>
	<td><input id="tp5puissance" type="text" name="tp5puissance" value="1"></td>
<!--<td><select id="tp5gw"><?php include('./elec/grandeurs.php')?></select></td>-->
	<td>P</td>
	<td><input type="button" value="CalcP" onclick="tp5_calc_puissance()" ></td>
</tr>
<tr>
	<td>Energie Joules (J)</td>
	<td><input id="tp5energie" type="text" name="tp5energie" value="1"></td>
<!--<td><select id="tp5gj"><?php include('./elec/grandeurs.php')?></select></td>-->
	<td>W</td>
	<td><input type="button" value="CalcE" onclick="tp5_calc_energie();" ></td>
</tr>
<tr>
	<td>Temps secondes(s)</td>
	<td><input id="tp5temps" type="text" name="tp5temps" value="1"></td>
	<td>T</td>
	<td><input type="button" value="CalcT" onclick="tp5_calc_temps()" ></td>
</tr>
</table>
<h3>Calculer la puissance en fonction de V | I | R</h3>
<section id="canvasbox"> 
<canvas id="canvas" width="150" height="150"> 
Your browser doesn't support the canvas element 
</canvas> 
</section>
<table>
<tr>
<td><select id="tp5op1val" onchange="tp5_setOp1()"><option>-</option><option value='V'>Tension - V </option><option value='I'>Intensite - A</option><option value='R'>Résistance - &#8486;</option></select></td>
<td><input id="tp5op1" type="text" name="tp5op1" value="1"></td>
<td id="top5op1td1"></td>
<td id="top5op1td2"></td>
</tr>
<tr>
<td><select id="tp5op2val" onchange="tp5_setOp2()"><option>-</option><option value='V'>Tension - V </option><option value='I'>Intensite - A</option><option value='R'>Résistance - &#8486;</option></select></td>
<td><input id="tp5op2" type="text" name="tp5op2" value="1"></td>
<td id="top5op2td1"></td>
<td id="top5op2td2"></td>
</tr>
<tr>
<td><select><option>Puissance - W</option></select></td>
<td><input id="tp5op3" 	type="text" name="tp5op3" value="1"></td>
<td>P</td>
<td><input type="button" value="CalcP" onclick="tp5_calc_puissance2()" ></td>
</tr>
</table>
<span id="pmaxpnom"></span>
<script>
//<![CDATA[
function tp5_setOp1(){
	var op2 = document.getElementById('tp5op2val');
	var r2   = op2.options[op2.selectedIndex].value;
	
	var op1 = document.getElementById('tp5op1val');
	var r   = op1.options[op1.selectedIndex].value;

	if(r == r2){
		alert('OP2 ('+r2+') must be different of OP1 ('+r+')');
	}
	
	document.getElementById('top5op1td1').innerHTML = r;
	document.getElementById('top5op1td2').innerHTML = 'Calc'+r;
}

function tp5_setOp2(){
	var op1 = document.getElementById('tp5op1val');
	var r   = op1.options[op1.selectedIndex].value;
	
	var op2 = document.getElementById('tp5op2val');
	var r2   = op2.options[op2.selectedIndex].value;
	
	if(r == r2){
		alert('OP2 ('+r2+') must be different of OP1 ('+r+')');
	}
		
	document.getElementById('top5op2td1').innerHTML = r2;
	document.getElementById('top5op2td2').innerHTML = 'Calc'+r2;
}

function initiate(){
	var canvas=document.getElementById('canvas').getContext('2d'); 
	//canvas.lineWidth = 15; //dimension de la ligne 
	canvas.strokeStyle = "rgb(255,0,0)"; //couleur des bords
	canvas.strokeRect(0,15,100,80); // position et dimension du rectangle
	//canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	//canvas.fillRect(4,50,100,100); // la partie de la surface qu'il faut remplir
	canvas.strokeStyle = "rgb(0,0,0)"; //couleur des bords
	canvas.beginPath();
	canvas.moveTo(23,70); 
	canvas.lineTo(55,70); 
	canvas.fillText("P = I² x R", 5,30);
	canvas.fillText("P = V x I", 5,45);
	canvas.fillText(" V ²", 30,65);
	canvas.fillText("P =", 5,73);
	canvas.fillText(" R ", 30,80);
	canvas.stroke(); 
}
window.addEventListener("load", initiate, false);
//]]>
</script>
