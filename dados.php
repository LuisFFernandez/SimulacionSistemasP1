<?php
// Se reciben los datos de entrada del cliente
// y se lo almacena en la variable $corridas.
$corridas = floatval($_POST['corridas']);
// Creamos las variables para los dos dados.
$dado_1 = 0;
$dado_2 = 0;
// Se crean dos variables de tipo array
$dado_resultados = [];
// El array para la suma es precargado con el
// tamaño de los datos a obtener.
$dado_suma = [0,0,0,0,0,0,0,0,0,0,0];
// Las iteraciones son realizadas dependiendo al
// numero que el cliente envio
for ($i = 0; $i < $corridas; $i++) {
    // Se generan dos numeros random
    $dado_1 = intval(rand(1,6));
    $dado_2 = intval(rand(1,6));
    // La suma se almacena en una nueva variable
    $total = $dado_1 + $dado_2;
    // Se "Empuja" la suma con la funcion push al array
    array_push($dado_resultados,($dado_1 + $dado_2));
    // Se incrementa el valor de la suma para ir
    // guardando un registro de los resultados
    $dado_suma[$total - 2] += 1;
}
// Se devuelve al cliente como un JSON
echo json_encode(($dado_suma));
echo json_encode($dado_resultados);
?>