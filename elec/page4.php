<h2>4 - Le courant</h2>
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
<br/>
<h3>Circuit en Série</h3>
<br/><p>
Dans un circuit en série, quelque soit le nombre de charges / résistances branchées<br/>
le courant reste le même. Mais la tension chute ( Voir chapitre Tension )
</p>
<section id="canvasbox1"> 
<canvas id="canvas1" width="150" height="150"> 
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
	

	canvas.fillStyle = "red"; //#c82124
	canvas.beginPath();
	canvas.arc(17,15,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.fill();	

	canvas.lineWidth = 5;
	canvas.fillStyle = "#c82124"; //couleur contenu
	canvas.strokeStyle = "red"; //couleur des bords	
	canvas.beginPath();
	canvas.arc(60,15,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.stroke();
	canvas.fill();	
	canvas.fillStyle = "white";
	canvas.font="bold 9px Verdana";
	canvas.fillText("1A", 53,20);
	canvas.font="10px sans-serif";
	
	canvas.fillStyle = "red"; //#c82124
	canvas.beginPath();
	canvas.arc(105,15,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.fill();	
	
	canvas.fillStyle = "red"; //#c82124
	canvas.beginPath();
	canvas.arc(105,95,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.fill();
	
	canvas.fillStyle = "red"; //#c82124
	canvas.beginPath();
	canvas.arc(55,95,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.fill();
	
	//param de la R1
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(25,12,15,6); // la partie de la surface qu'il faut remplir
	canvas.fillText("R1", 25,27);
	//param de la R2
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(75,12,15,6); // la partie de la surface qu'il faut remplir
	canvas.fillText("R2", 75,27);	
	//param de la R3
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(107,35,6,40); // la partie de la surface qu'il faut remplir
	canvas.fillText("R3", 115,47);
	//param de la R4
	//canvas.lineWidth = 5;
	canvas.fillStyle = "blue";	// couleur de la surface du rectangle
	canvas.fillRect(75,92,15,6); // la partie de la surface qu'il faut remplir
	canvas.fillText("R2", 75,27);
	
	canvas.beginPath();
	canvas.strokeStyle = "rgb(0,0,0)"; //couleur des bords
	canvas.lineWidth = 3;
	//+
	canvas.moveTo(0,50); //x,y
	canvas.lineTo(20,50); //x, y
	//-
	canvas.moveTo(5,55); 
	canvas.lineTo(15,55);	
	canvas.stroke(); 

	canvas.fillText("Le courant entrant en un", 15,117);
	canvas.fillText("point quelconque du circuit", 15,127);
	canvas.fillText("est égale au courant", 15,137);
	canvas.fillText("qui en sort ( noté  	  )", 15,147);
	
	canvas.fillStyle = "red"; //#c82124
	canvas.beginPath();
	canvas.arc(100,145,5,0,Math.PI*2,true);
	canvas.closePath();
	canvas.fill();	
	
	
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