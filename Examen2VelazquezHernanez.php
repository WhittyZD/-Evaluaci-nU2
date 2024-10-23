<?php
/* CBTIS 89
Velazquez Hernandez Zoe Dylan
Programa que almacena los precios de 5 artículos, donde calcularemos el IVA y se guardará en otro arreglo. 
Después calculamos un descuento del 10% a todos los elementos. 
Finalmente obtenemos los resultados después de aplicar el descuento.
3°A Programación Matutino
*/

$array_precios =array(500, 400, 200, 700, 100);
$arrayIVA =array();
$arraySubtotal =array();
$arrayDescuentos =array();
$arrayTotal =array();
$longitud =count($array_precios);

echo "ARREGLO PRECIOS <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $array_precios[$i], "<br>";
}

echo "ARREGLO IVA <br>";
for ($i = 0; $i < $longitud; $i++) {
    echo $arrayIVA[$i], "<br>";
}

echo "ARREGLO SUBTOTAL <br>";
for ($i = 0; $i < $longitud; $i++) {
    $arraySubtotal[$i]=$array_precios[$i]+$arrayIVA[$i]; 
    echo $arraySubtotal[$i], "<br>";
}

echo "ARREGLO DESCUENTOS <br>";
for ($i = 0; $i < $longitud; $i++) {
    $arrayDescuentos[$i] = $arraySubtotal[$i]* 0.10;
    echo $arrayDescuentos[$i], "<br>";
}

echo "ARREGLO TOTAL <br>";
for ($i = 0; $i < $longitud; $i++) {
    $arrayTotal[$i] = $arraySubtotal[$i] - $arrayDescuentos[$i
    echo $arrayTotal[$i], "<br>";
}
?>