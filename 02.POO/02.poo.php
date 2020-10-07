<?php

#CLASE
#Una clase es un modelo que se utiiza para crear objetos que comparten un mismo comportamiento, estado e identidad.

    class Automovil{

        #PROPIEDADES
        #Son las características que puede tener un Objeto.

        public $marca;
        public $modelo;

        #MÉTODO
        #Es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer. La única diferencia entre método y función, es que llamamos método a las funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programación estructurada.

        public function mostrar(){

            echo "<p>Hola! soy un $this->marca, modelo $this->modelo</p>";

        }

    }

#OBJETO
#Una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

    $a = new Automovil();
    $a -> marca = "Toyota";
    $a -> modelo = "Corolla";
    $a -> mostrar();

    $b = new Automovil();
    $b -> marca = "Hyundai";
    $b -> modelo = "Accent Vision";
    $b -> mostrar();

?>