<?php

    class MvcController{

        #LLAMADA A LA PLATILLA
        #-------------------------------------------
        
        public function plantilla(){
            
            include "views/template.php";

        }

        #INTERACCIÓN DEL USUARIO
        #-------------------------------------------
        
        public function enlacesPaginasController(){

            if(isset($_GET["action"])){

                $enlacesController = $_GET["action"];

            }
            else{

                $enlacesController = "inicio";

            }

            $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
            include $respuesta;

        }


    }

?>