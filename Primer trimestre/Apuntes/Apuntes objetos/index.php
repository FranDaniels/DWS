<?php
require_once('Personaje.php');

echo 'Aula de los personajes: '.Personaje::$AULA.'<br>';

$p=new Personaje('Javi','17');
$p2=new Personaje('Juan','107');

// $v[]=new Personaje('Javi','17');
// $v2[]=new Personaje('Juan','107');

// foreach ($v as $value) {
//     echo $value->pasear().'<br>';
// }

// echo $p.'<br>';
// $p->setNombre('Inés');
// $p->setEdad(22);
// echo $p.'<br>';
// echo 'La persona: '.$p->getNombre().' tiene '.$p->getEdad().' años.<br>';
// echo Personaje::metodoEstatico();

echo $p->pasear().'<br>';
echo $p2->pasear().'<br>';
echo $p->pelear().'<br>';
