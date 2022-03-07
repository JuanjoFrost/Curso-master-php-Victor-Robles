<?php

//debugging 
$name = 'Juanjo';

var_dump($name);

//date
echo date('d-m-y');
echo "<br/>";

//timestamp
echo time();
echo "<br/>";

//Math functions
echo "Raíz cuadrada de 10:" .sqrt(10);
echo "<br/>";

//Random number
echo "Número aleatorio entre 10 y 40: ".rand(10, 40);
echo "<br/>";
//PI
echo "Pi : " .pi();
echo "Redondear" .round(7.891234, 2);
echo "<br/>";

//Más funciones generales
//Verify if is float
if(!is_float($name)){
    echo "La variable nombre no es un número con decimales";
}
//iset verify if it exists a variable
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "la variable no existe";
}

//trim eliminate the spaces between a string
echo "<br/>";
$frase = '          mi contenido';
var_dump(trim($frase));
echo "<br/>";
//Eliminate variables or indexes of arrays

$year = 2022;
//unset eliminate a variable
unset($year);
echo "<br/>";

//Evaluate empty variables

$text = "";

if (empty($text)) {
    echo "la variable está vacía";
}else{
    echo "la variable tiene contenido";
}
echo "<br/>";

//Count characters of a string
$cadena = "12345";
echo strlen($cadena);
echo "<br/>";

//Find a character
//strpos return the index of the character we give it

$frase = "La vida es bella";
echo strpos($frase, "i");
echo "<br/>";

//replace words into a string
$frase = str_replace("vida", "moto", $frase);

echo $frase;

//Uppercase and Lowercase
echo strlower($frase);
echo "<br/>";
echo strtoupper($frase);