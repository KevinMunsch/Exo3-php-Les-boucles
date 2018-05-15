<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php

// exercice 1

for ($i=1;$i<=10;$i++) {
echo $i;
}

// exercice 2

$a=0;
$b=10;

while ($a<=20) {

     $p=$a*$b;
     echo " ".$p;
     $a++;

}

// exercie 3

$c=100;
$d=rand(1, 100);

while ($c>=10) {

    $e=$c*$d;
    echo "     ".$e;
    $c--;
}

// exercice 4

$f=1;

while ($f<=10) {

echo $f;

$f=$f+$f/2;

}

// exercice 5

$g=1;

for ($g=1; $g<15; $g++) {

 echo " ".$g." On y arrive presque!";

}

// exercice 6

 for ($h=20;$h>0;$h--) {

  echo "   ".$h." C'est presque bon!";

 }

// exercice 7

for ($i=1;$i<100;$i=$i+15) {
   echo "  ".$i."  On tient le bon bout!";

}

// exercice 8

for ($j=100;$j>0;$j=$j-12) {
   echo "  ".$j."  ENFIN!";
}


 ?>








  </body>
</html>
