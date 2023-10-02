<?php
    class View{

        function __construct()
        {
            echo '<p>Vista Base.</p>';
        }

        //Funcion para determinar cual vista cargar...
        function render($nombre){
            require 'views/'.$nombre.'.php';
        }
    }

?>