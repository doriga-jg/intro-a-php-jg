<?php

#Variable Numérica
    $numeroCinco = 5;
    echo $numeroCinco;
    echo "<br>Esto es una variable Número: $numeroCinco<br>";
    var_dump($numeroCinco);
    echo "<br><br>";

#Variable Texto
    $palabra = "texto";
    echo "Esto es una variable Texto: $palabra<br>";
    var_dump($palabra);
    echo "<br><br>";

#Variable Boleana
    $boleana = true;
    echo "Esto es una variable Boleana: $boleana<br>";
    var_dump($boleana);
    echo "<br><br>";

#Variable Arreglo
    $colores = array("rojo","amarillo");
    echo "Esto es una variable Arreglo: $colores[0]<br>";
    var_dump($colores);
    echo "<br><br>";

#Variable Arreglo con Propiedades
    $verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
    echo "Esto es una variable Arreglo con Propiedades: $verduras[verdura1]<br>";
    var_dump($verduras);
    echo "<br><br>";

#Variable Objeto
    $frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
    echo "Esto es una variable Objeto: $frutas->fruta1<br>";
    var_dump($frutas);
    echo "<br><br>";

?>