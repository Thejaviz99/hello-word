<?php
#ejercicio 1 (no lo termine)
class ejercicio{
    function sumar ($n1,$n2){
        $suma=$n1+$n2;
        return $suma;
    }
    function restar ($n1,$n2){
        $resta=$n1-$n2;
        return $resta;
    }
    function multiplicar ($n1,$n2){
        $multi=$n1*$n2;
        return $multi;
    }
    function dividir ($n1,$n2){
        $div=$n1/$n2;
        return $div;
    }   
}

#ejercicio 1 
class persona{
    public function nombre ($nom,$apellido){
        echo "mi nombre es ". $nom." " . $apellido;

    }
}
$hola = new persona();
$hola -> nombre("javier", "guzman");
#ejerccio 2
class persona {
    private $nombre;
    private $apellido;
    private $nacimiento;
    public function edad ($nombre,$apellido,$nacimiento){
        $val->nombre = $nombre;
        $val->apellido = $apellido;
        $val->nacimiento = $nacimiento;
    }
    public function getEdad (){
        return $edad;
    }
}
#ejercicio 3
class juegos{
    public $tipo;
    public $bueno;
    public function mostrar(){
        echo "<p>este juego$tipo->tipo,bueno $bueno->bueno,vale</p>";
    }
}
$a=new juegos();
$a->tipo="smite";
$a->bueno="si";
$a->mostrar();

$b=new juegos();
$b->tipo="pokemon";
$b->bueno="si";
$b->mostrar();

$c=new juegos();
$c->tipo="de carros";
$c->bueno="no";
$c->mostrar();
?>