<HTML>
<HEAD> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
<br>
<h1>Maszyna pseudolosująca dużego lotka. 6 liczb z przedziału 1-49 </h1>
	<br>
	<br>
<FORM action="lotto.php" method="POST">
<fieldset>
                    
<legend><h2>  Wybierz opcję  </h2></legend><br />
<input type="hidden" name="execute" value="true">
<input name="submit" type="submit" value="Losuj" class="btn">
	<br>
	<br>
</fieldset>
	<br>
	<br>
<fieldset>
<legend><h2>  Wyniki Lotto  </h2></legend><br />
</FORM>
<p>
<?php


if (isset($_POST['execute'])){
	
for($i=0; $i < 6; $i++){
	$x = mt_rand(1,49);
if (!in_array($x, $tablica)) {
$tablica[] = $x;}  // Nie trzeba dopisywać indeksu dla tablicy, sam liczy kolejne obiekty od 0 do 5 (łącznie 6)
else{
	$i -= 1;}  // Jeśli taka liczb już jest w naszej tablicy, to zmniejszamy licznik "i" o jeden, by nasz for wylosował nam 6 a nie 5 liczb.
sort($tablica); // Posortuje wylosowane numery w tablicy rosnąco.
}
//var_dump($tablica); Zrzuca nam wyniki zapisane w tablicy, posortowane rosnąco
}


if (isset($_POST['execute'])){
$obrazki = array("p0.png", "p1.png", "p2.png", "p3.png", "p4.png", "p5.png", "p6.png", "p7.png", "p8.png", "p9.png", "p10.png", "p11.png", "p12.png", "p13.png", "p14.png", "p15.png", "p16.png", "p17.png", "p18.png", "p19.png", "p20.png", "p21.png", "p22.png", "p23.png", "p24.png", "p25.png", "p26.png", "p27.png", "p28.png", "p29.png", "p30.png", "p31.png", "p32.png", "p33.png", "p34.png", "p35.png", "p36.png", "p37.png", "p38.png", "p39.png", "p40.png", "p41.png", "p42.png", "p43.png", "p44.png", "p45.png", "p46.png", "p47.png", "p48.png", "p49.png"); 

for($j=0; $j <6; $j++){
	$obrazek = $obrazki[$tablica[$j]];
	echo "<img src=http://szuflandia.pjwstk.edu.pl/~s16281/WPR/LAB2/lotto/$obrazek width=100 height=100>";}
}


?>
</fieldset>
</p>
</BODY>
</HTML>
