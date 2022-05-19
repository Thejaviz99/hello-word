<?php

print "mi primer proyecto";

echo "<br><br>";

#Varible numerica
$numero = 23;
echo "tengo estos años : $numero";

echo "<br><br>";

var_dump ($numero);

echo "<br><br>";

#variable texto
$palabra ="hola mucho gusto";
echo "le mostrare el siguiente texto: $palabra";
echo "<br><br>";
var_dump ($palabra);
echo "<br><br>";

#variable boleana
$boleana = true;
echo "naci en bogota?: $boleana";
echo "<br><br>";
var_dump ($boleana);
echo "<br><br>";

#variable arreglo
$colores = array("verde","negro","azul","morado","blanco");
echo "esta es una variable de arreglo: $colores[1]";
echo "<br><br>";
var_dump ($colores);
echo "<br><br>";

$boleana = true;
echo "despues del 1 va el 2 :$boleana ";
echo "<br><br>";
var_dump ($boleana);
echo "<br><br>";

$confirmado=array("si","no","no","si","no","si");
echo $confirmado[5];
echo "<br><br>";
var_dump ($confirmado);

echo "<br><br>";

$datos = array("kevin","sagua","camilo");
echo "mi compañero es: $datos[1]";
echo "<br><br>";
var_dump ($datos);

echo "<br><br>";

$boleano = true;
$pala = "hola";
$edad = 19;


echo "tiene la siguiente edad $edad";
echo "es hombre? $boleano";
echo "y dice $pala";

echo "<br><br>";

var_dump ($boleano,$pala,$edad);
?>


