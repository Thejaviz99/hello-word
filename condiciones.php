<?php
#condiones
#$a= 5;
#$b=10;
#if($a>$b){
#    echo "a es mayor que b";
#}
#else if ($a==$b){
#    echo "a es igual que b";
#}
#else {
#    echo "a es menor que b";
#}
#echo "<br>";
#$dia= "sabado";
#switch ($dia){
#    case "sabado":
#        echo "voy a estudiar php.<br>";
#    break;
#    case "viernes":
#        echo "voy de farra con cui.<br>";
#    break;
#    case "domingo":
#        echo "voy a descansar.<br>";
#    break;
#default: echo "voy a corpuandes.<br>";
    
#}

#echo "<br><br>";
#$n=0;
#while($n<=5){
#    echo $n;
#    $n++;
#}
#echo "<br><br>";
#$p= 1;
#do {
#    echo $p;
#    $p++;
#}
#while($p <= 5);
#for ($i=0;$i<=5;$i++){
 #   echo $i;
#}

#funciones sin parametro
#1
function perro (){
    echo "mi perro se llama jake.<br>";
}
perro();
#2
function familia (){
    echo "mi famila es pequeña.<br>";
}
familia();
#funciones con parametros
#1
function habitacion ($cama){
    echo $cama."<br>";
}
habitacion ("cama");
#2
function anime ($manga){
    echo $manga."<br>";
}
anime ("manga");
#funciones con retorno
#1
function hola ($saludo){
    return $saludo;
}
echo hola ("saludo");

#2
function bogota ($capital){
    return $capital;
}
echo bogota ("capital");
#condiciones
#1
$z= 120;
$y= 900;
if ($z>$y){
    echo "omg es mayor";
}
else if ($z==$y){
    echo "no me lo puedo creer son iguales";
}
else{
    echo "omg es menor";
}
#2
$poker= 1500;
$agula= 1500;
if ($poker>$aguila){
    echo "ta mas cara la poker ";
}
else if ($poker==$aguila){
    echo "tan iguales de precio";
}
else{
    echo "esta mas cara la aguila";
}
#while
#1
$q=1;
while ($q<=10){
    echo $q;
    $q++;
}
#2
$w=2;
while ($w<=20){
    echo $w;
    $w++;
}
#do while
#1
$e=1;
do{
    echo $e;
    $e++;
}
while ($e<=15);
#2
$loco=99;
do{
    echo $loco;
    $loco++;
}
while ($loco<=120);
#for
#1
for ($s=1;$s<=10;$s++){
    echo $s;
}
#2
for ($l=5;$l<=15;$l++){
    echo $l;
}
#switch
#1
$mes="marzo";
switch ($mes){
    case "diciembre":
        echo "ya es navidad y año nuevo";
        break;
    case "marzo":
        echo "es mi cumpleaños";
        break;
    case "junio":
        echo "son vacaciones";
        break;
    case "septiembre":
        echo "dia del amor y la amistad y yo solito";
        break;
    default: echo "no hago nada en los otros meses";
    }
#2
$mascotas="lupe";
switch ($mascotas){
    case "jake":
        echo "es el mas viejo y gruñon de todos";
        break;
    case "lulu":
        echo "la mama de los cachorros";
        break;
    case "osvalda":
        echo "la mas grande";
        break;
    case "lupe":
        echo "es mexicana-veneca";
        break;
    case "loki":
        echo "el mas mimado";
        break;
    case "onix":
        echo "el mas timido";
        break;
    case "odin":
        echo "el fumador y amante de las fufas";
        break;

    default: echo "no tengo ningun perro con ese nombre";
}

?>
