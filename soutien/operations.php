<?php
//addition
// function add(int $nb1, int $nb2) : int
//{
//    return $nb1 + $nb2;
//}

//soustraction
//{
//    return $nb1 - $nb2;
//}
//multiplication
//function multiply(int $nb1, int $nb2) : int
//{
//    return $nb1 * $nb2;
//}
//division
//function divide(int $nb1, int $nb2) : int
//{
//    return $nb2 !== 0 ? intval($nb1 / $nb2) : null;
//}
//modulo
//function modulo(int $nb1, int $nb2) : int
//{
//    return $nb2 !== 0 ? $nb1 % $nb2 : null;
//}
//puissance
//function power(int $nb1, int $nb2) : int
//{
//    return pow($nb1, $nb2);
//}

//factorielle
//function factorial(int $nb1) : int
//{
//    $result = 1;
//    for ($i = $nb1; $i > 0; $i--) {
//        $result *= $i;
//    }
//    return $result;
//}

//Fonction surface d'un rectangle :

//function rectangle_surface(int $nb1, int $nb2) : int
//{
//    return $nb1 * $nb2;
//}

//Formule Surface Triangle Rectangle :

//function rectangle_triangle_surface(int $nb1, int $nb2) : int
//{
//    return ($nb1 * $nb2)/2;
//}

//Formule Surface Triangle Basique : 

//function basic_triangle_surface(int $nb1, int $nb2) : int
//{
//    return ($nb1 * $nb2)/2;
//}

//Formule Surface Cercle

//function disk_surface(int $nb1) : float
//{
//    $surface = pi() * $nb1**2;
//    return round($surface, 5);
//}

?>

<?php

//Fonction Addition : 

function add(int $nb1, int $nb2) : int
{
    return $nb1 + $nb2;
}

//Fonction soustraction :

function substract(int $nb1, int $nb2) : int
{
    return $nb1 - $nb2;
}

//Fonction Multiplication :

function multiply(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

//Fonction Division :

function divide(int $nb1, int $nb2) : ?int
{
    if($nb2 !== 0){
    return $nb1 / $nb2;
    }else{
        return null;
    }
}


//Fonction Modulo :

function modulo(int $nb1, int $nb2) : ?int
{
    if($nb1 !== 0){
    return $nb1 % $nb2;
    }else{
        return null;
    }
}

//Fonction Puissance : 
function power(int $nb1, int $nb2) : int
{
    return $nb1 ** $nb2;
}

//Fonction factorielles : 

function factorial(int $nb1) : int
{
    $fact = 1;
    for($i = 1; $i <= $nb1; $i++){
        $fact = $fact * $i;
    }
    return $fact;
}

//Fonction surface d'un rectangle :

function rectangle_surface(int $nb1, int $nb2) : int
{
    return $nb1 * $nb2;
}

//Formule Surface Triangle Rectangle :

function rectangle_triangle_surface(int $nb1, int $nb2) : int
{
    return ($nb1 * $nb2)/2;
}

//Formule Surface Triangle Basique : 

function basic_triangle_surface(int $nb1, int $nb2) : int
{
    return ($nb1 * $nb2)/2;
}

//Formule Surface Cercle

function disk_surface(int $nb1) : float
{
    $surface = pi() * $nb1**2;
    return round($surface, 5);
}
?>