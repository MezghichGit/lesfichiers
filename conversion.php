<?php
/*
$v ="Amine";
echo $v;
$v = 20;
echo $v;
$v="abc";
echo $v;*/

$var = "43.5 metres";

//$res = settype($var, 'float'); //1 : True; 0:False
//$res = settype($var, 'int');
$res = settype($var, 'string');
if ($res==true) {
    //echo $res."\n".$var;
    //echo "Conversion OK";
    echo"Valeur converti = ".$var;
} else {
    echo "Conversion KO";
}
