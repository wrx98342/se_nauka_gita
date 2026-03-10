<?php
 
//Obliczanie średniej arytmetycznej
//www.algorytm.org
 
$inputy = fopen('php://stdin', "r");
 
//pobierz liczbe elementow
fscanf($inputy, "%d",$n);
 
//zainicjuj sume elementow
$w = 0.0;
 
//dla kazdego elementu
for( $i = 0; $i < $n; $i++ )
{
//pobierz wartosc elementu i dodaj ja do sumy
fscanf($inputy, "%d",$a);
$w = $w + $a;
}
 
//wypisz wynik
printf("%lf", $w/$n);
?>



function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year.<br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
