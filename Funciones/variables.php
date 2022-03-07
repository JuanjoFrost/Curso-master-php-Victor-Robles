<?php

/* Local variables and Global variables 

Local variables: are declarated into a function and we can´t use it out of the function,
unless we do a return

Global variables: are variables that are declarated out of the function,
and are available inside and out of the function
*/


/*Variable Functions*/

function buenosDias(){
    return "Hola buenos días";
}

function buenasTardes(){
    return "hey! qué tal la comida?";
}

function buenasNoches(){
    return "Te vas a dormir ya? ";
}

/*$horario = "buenasNoches";*/

/*$horario = "Noches";*/

$horario = $_GET['horario'];

/*$horario(); //this is an invocation of the function*/

$myFunction = "buenas".$horario;
echo $myFunction();

