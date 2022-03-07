<?php

//a function wich is given the table of a number that we give it
function tabla($numero){
     echo "<h3> Tabla de multiplicar del número: $numero </h3>";
     for ($i=1; $i <=12 ; $i++) { 
         echo $numero.' por '.$i .' es: '.$numero*$i. "</br>";
     }
}
//we asure with isset if it has a number into the url
if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
}else{
    echo 'No hay número para sacar la tabla';
}

//function with a optional parameter
// IS A BAD PRACTICE DON´T RETURN NOTHING
function calculator($numero1, $numero2, $negrita = false){ /*Negrita is a optional variable*/ 

    $suma = $numero1+$numero2;

    $stringChain = "";

    if ($negrita) {
        $stringChain .= "<h1>";
    }

    $stringChain .= "Suma: $suma <br/>";

    if ($negrita) {
        $stringChain .= "</h1>";
    }

    return $stringChain;

}

echo calculator(1,2, true);


//Functions into functions

function getName($name){
    $text = "El nombre es:  $name";
    return $text;
}

function getLastName($lastName){
    $text = "El apellido es:  $lastName ";
    return $text;
}

function returnName($name, $lastName){
   $text = getName($name) . "<br/>"  .getLastName($lastName) ;
   return $text;
}

echo returnName("Juanjo", "González");

