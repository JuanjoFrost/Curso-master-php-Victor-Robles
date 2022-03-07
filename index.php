<!--Constantes-- this types of variables can´t change--!>
<?php

define('Nombre', ' Juanjo');
define('Web', 'juanjo.es');

echo Nombre;

//Variables pre-definidas are variables that has a value predefined by php

echo PHP_VERSION; 
echo PHP_OS;
echo __LINE__;

//variables super globales / server variables

echo $_SERVER['SERVER_ADDR'];//localhost direction


//variables GET y POST


