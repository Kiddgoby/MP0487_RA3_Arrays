<?php
echo "<h1> Ejercicio 1</h1>";
$contador = 1;
$array = array(
    'nombre' => 'Sara',
    'apellido' =>'Martinez',
    'edad' =>"23",
    'ciudad' =>"Barcelona");
    
    foreach ($array as $value) {
        echo "Dato".$contador.":" . $value . "<br>";
        $contador++;
    }    
//---------------------------------------
    echo "<h1> Ejercicio 2</h1>";
foreach ($array as $value=> $datos) {
    echo $value .":" . $datos . "<br>";
    $contador++;
}
//---------------------------------------
echo "<h1> Ejercicio 3</h1>";
$contador2=1;
foreach ($array as $value=> $datos) {
    if ($value == 'edad') {
        $datos++;
    }
    echo $value .":" . $datos . "<br>";
}
//---------------------------------------
echo "<h1> Ejercicio 4</h1>";

unset($array['ciudad']);
var_dump($array);

//---------------------------------------
echo "<h1> Ejercicio 5</h1>";
    $letters = " a, b, c, d, e, f";
    $separar = (explode(",", $letters));

    $contador3 = 6;
    rsort($separar);   

    foreach ($separar as $value=> $datos) {
    echo "letter" . $contador3 .":" . $datos . "<br>";
    $contador3--;
}

//---------------------------------------
echo "<h1> Ejercicio 6</h1>";
$notas = [
    'Marta' => '10',
    'Isabel' =>'8',
    'Luis' =>"7",
    'Miguel' =>"5",
    'Aitor' =>"4",
    'Pepe' =>"1"
];
    arsort($notas);
    echo "notas alumnos:";
    foreach($notas as $columna1 => $columna2) {
        echo $columna1 . ":" . $columna2 . ",";
    }

//---------------------------------------
echo "<h1> Ejercicio 7</h1>";
$media=0;
$cantidadAlumnos = 6;
$total = array_sum($notas)/$cantidadAlumnos;
echo "Media de notas: " . $total . "<br>";

echo "Alumnos por encima de la media:<br>";
foreach ($notas as $columna1 => $columna2) { 
    if ( $columna2 >$total) {
        echo $columna1 . ":" . $columna2 . ",";
    }
}

//---------------------------------------
echo "<h1> Ejercicio 8</h1>";
$notaMasAlta=0;
$mejorAlumno="";
foreach ($notas as $Alumnos => $nota) {
    if ($nota>$notaMasAlta) {
        $notaMasAlta=$nota;
        $mejorAlumno=$Alumnos;
    }
}
echo $notaMasAlta;
echo $mejorAlumno;

//---------------------------------------
echo "<h1> Ejercicio 9</h1>";
?>
