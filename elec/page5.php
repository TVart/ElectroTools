<h2>5 - La résistance</h2>
En fonction du matériau utilisé, l'écoulement des éléectrons est plus ou moins freiné par la résistance du matériau en question. (Collision des atomes)<br/>
La résistance ( R ) est de 1 Ohm quand dans un matériau soumis à une tension de 1 Volt, l'intensité du courant est de 1 Ampère<br/>  
<h3>TP : La loi d'Ohm</h3>
<table>
<tr>
	<td>Tension Volt (V)</td>
	<td><input id="tp4tension" type="text" name="tp4tension" value="1"></td>
	<td><select id="tp4gv"><?php include('./elec/grandeurs.php')?></select></td>
	<td>V</td>
	<td><input type="button" value="CalcT" onclick="tp4_calc_tension()" ></td>
</tr>
<tr>
	<td>Intensite du courant Ampère (A)</td>
	<td><input id="tp4courant" type="text" name="tp4courant" value="1"></td>
	<td><select id="tp4gc"><?php include('./elec/grandeurs.php')?></select></td>
	<td>I</td>
	<td><input type="button" value="CalcA" onclick="tp4_calc_courant();" ></td>
</tr>
<tr>
	<td>Résistance Ohm( &#8486; )</td>
	<td><input id="tp4resistance" type="text" name="tp4resistance" value="1"></td>
	<td><select id="tp4gr"><?php include('./elec/grandeurs.php')?></select></td>
	<td>R</td>
	<td><input type="button" value="CalcR" onclick="tp4_calc_resistance()" ></td>
</tr>
</table>

<h3>Résistances en Série</h3>
<section id="canvasbox1"> 
<canvas id="canvas1" width="150" height="150"> 
Your browser doesn't support the canvas element 
</canvas> 
</section>
<h3>Résistances Parallèles</h3>
<section id="canvasbox2"> 
<canvas id="canvas2" width="250" height="150"> 
Your browser doesn't support the canvas element 
</canvas> 
</section>
<script>
//<![CDATA[

function initiate(){
	var canvas=document.getElementById('canvas1').getContext('2d'); 
	//paramètres du circuit vide
	canvas.lineWidth = 1; //dimension de la ligne 
	canvas.strokeStyle = "rgb(255,0,0)"; //couleur des bords
	canvas.strokeRect(10,15,100,80); // position et dimension du rectangle
	
	//param de la R1
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(25,12,15,6); // la partie de la surface qu'il faut remplir
	canvas.fillText("R1", 25,27);
	//param de la R2
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(45,12,15,6); // la partie de la surface qu'il faut remplir
	canvas.fillText("R2", 45,27);
	
	canvas.beginPath();
	canvas.strokeStyle = "rgb(0,0,0)"; //couleur des bords
	canvas.lineWidth = 3;
	//+
	canvas.moveTo(0,50); //x,y
	canvas.lineTo(20,50); //x, y
	//-
	canvas.moveTo(5,55); 
	canvas.lineTo(15,55);	
	canvas.fillText("Req = R1 + R2", 25,55);
	canvas.fillText("I = U / Req", 25,69);
	canvas.stroke(); 

	var canvas2=document.getElementById('canvas2').getContext('2d'); 
	//paramètres du circuit vide
	canvas2.lineWidth = 1; //dimension de la ligne 
	canvas2.strokeStyle = "rgb(255,0,0)"; //couleur des bords
	canvas2.strokeRect(10,15,100,80); // position et dimension du rectangle
	
	//param de la R1
	//canvas.lineWidth = 5;
	canvas2.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas2.fillRect(45,25,10,40); // la partie de la surface qu'il faut remplir
	canvas2.fillText("R1", 55,47);
	
	//param de la R2
	//canvas.lineWidth = 5;
	canvas2.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas2.fillRect(105,25,10,40); // la partie de la surface qu'il faut remplir
	canvas2.fillText("R2", 115,47);	
	
	canvas2.beginPath();
		canvas2.strokeStyle = "rgb(255,0,0)"; //couleur des bords	
		canvas2.moveTo(50,15); //x,y
		canvas2.lineTo(50,95); //x, y		
	canvas2.stroke(); 
	
	canvas2.beginPath();	
		canvas2.strokeStyle = "rgb(0,0,0)"; //couleur des bords
		canvas2.lineWidth = 3;	
		//+
		canvas2.moveTo(0,50); //x,y
		canvas2.lineTo(20,50); //x, y
		//-		
		canvas2.moveTo(5,55); 
		canvas2.lineTo(15,55);
	canvas2.stroke(); 

	canvas2.beginPath();	
		canvas2.strokeStyle = "rgb(0,0,0)"; //couleur des bords
		canvas2.lineWidth = 1;	
		
		canvas2.moveTo(150,60); //x,y
		canvas2.lineTo(120,60); //x, y
		canvas2.fillText(" = Req", 149,63); //x, y
		canvas2.fillText(" 1 ", 125,55); //x, y
		canvas2.fillText("1      1", 120,70); //x, y
		canvas2.fillText("---- + -----", 117,75); //x, y
		canvas2.fillText("R1    R2", 117,81); //x, y
		
		canvas2.moveTo(5,55); 
		canvas2.lineTo(15,55);
	canvas2.stroke(); 	
	
}
window.addEventListener("load", initiate, false);
//]]>
</script>