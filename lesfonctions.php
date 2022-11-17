<?php
//phpinfo();

echo 4 & 7;
echo"<br/>";

$a = "a";
echo ++$a;
echo"<br/>";
$x = 10;

$y = 20;
$z = $x == $y; echo "z = ". "$z";
echo"<br/>";
//$z == $x = $y;  echo "z = ". "$z";

$res = 2*3+4;
echo $res;
echo"<br/>";
$a=8;

echo $a--;
echo"<br/>";
echo $a;

$e = (false || true);
echo "e = " . $e;
echo"<br/>";
$f = true or $f=false;

echo "f = " .$f;
//echo false;


echo __FILE__."<br/>";


echo "Serveur : ".$_SERVER["HTTP_HOST"]."\n";

echo "ADRESSE : ".$_SERVER["REMOTE_ADDR"]."\n";

//echo "DATE - GMT : ".$_SERVER["DATE_GMT"]."\n";

//echo "DATE - LOCAL : ".$_SERVER["DATE_LOCAL"]."\n";

$x = 10;  // variable globale
$y = 20;  // variable globale

$s = somme($x,$y);
$p = produit($x,$y);
echo "Somme = ".$s." Produit = ".$p;

function somme($a, $b)
{
    return $a + $b;
}

function produit($a, $b)
{
    return $a * $b;
}
?>