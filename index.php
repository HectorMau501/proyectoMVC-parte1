<?php
    //Carga las configuraciones principales
    require_once 'config.php';

    //Establecemos las librerias para cargar los controllers, las vistas y app.
    //Hasta este momento no tenemos ningun modelo
    require_once("libs/controller.php");
    require_once("libs/view.php");
    require_once("libs/app.php");

    //Creamos el objeto con el nombre de la url
    $app = new App();
?>