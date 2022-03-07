<?php

/*Ejercicio1: Create two variables country and continent and show value
to screen, then show a comment of the type of the data they have*/

$_pais = 'Chile';
$_continente = 'Sudamerica' ."\n";

echo $_pais ." ". $_continente;

var_dump($_pais, $_continente);

/*Ejercicio2: Show all numbers among 1 and 100 that are pairs */

for ($i=1; $i <=100 ; $i++) { 
    if ($i % 2 == 0) {
        echo $i . "<br/>";
    }
}

/*Ejercicio 3: Imprimer por pantalla el cuadrado de los primeros 40 números naturales */

$a=0;
$b=0;
while ($a < 40) {
    $b+=$a++;
    echo $a **2;
    echo "<br/>";
}

/*Exercise 4 , get two numbers by the url and do all the basic arimetic operations */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $_num1 = $_GET['numero1'];
    $_num2 = $_GET['numero2'];

    echo $_num1 . $_num2 ."</br>";
}


/*Exercise 5, show all numbers between two numbers that comes from url ($_GET)*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $_num1 = $_GET['numero1'];
    $_num2 = $_GET['numero2'];
    
    if ($_num1 > $_num2) {
        for ($_num2++; $_num2<$_num1; $_num2++) { 
            echo $_num2;
        }
    }else{
        for ($_num2; $_num2<=$_num1; $_num1++) { 
            echo $_num2;
        }
    }
}


/*Exercise 6: show a html table with the multiplication of 10*/ 


echo "<table border = '1'>";
echo "<tr>";

for ($cabecera=1; $cabecera <=10 ; $cabecera++) { 
    echo "<td>".'tabla del: '.$cabecera . "</td>";
}

echo "</tr>";

echo "<tr>";


for ($i=1; $i <=10 ; $i++) { 
    echo "<td>";

    for ($x=1; $x <=10 ; $x++) { 
        echo $i.' X '.$x. '=' . $i*$x .'</br>';
    }

    echo "</td>";
}

echo "</tr>";
echo "</table>";

/*Exercise 5, show all numbers odd between two numbers that comes from url ($_GET)*/

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $_num1 = $_GET['numero1'];
    $_num2 = $_GET['numero2'];
    
    if ($_num1 < $_num2) {
        for ($i=$_num1; $i<=$_num2 ; $i++) { 
            if ($i % 2 !=0) {
                echo $i;
            }
        }
        
    }else{
        if ($_num1 > $_num2) {
            for ($i=$_num2; $i<=$_num1 ; $i++) { 
                if ($i % 2 !=0) {
                    echo $i;
                }
            }
        }    
    }
}
