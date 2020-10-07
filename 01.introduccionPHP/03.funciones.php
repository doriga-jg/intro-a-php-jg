<?php

#Funciones sin parámetros
function saludo(){
    echo "Hola<br>";
}

saludo();

#Funciones con parámetros
function despedida($adios){
    echo $adios."<br>";
}

despedida("chao");

#Funciones con parámetro
function retorno($retornar){
    return $retornar;
}

echo retorno("retornar");

?>