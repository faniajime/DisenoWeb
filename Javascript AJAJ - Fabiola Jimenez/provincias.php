<?php
$request = json_decode(file_get_contents('php://input')); 
$response = array();
$provincias = array(
array('id' => 1, 'nombre' => 'San José'),
array('id' => 2, 'nombre' => 'Alajuela'),
array('id' => 3, 'nombre' => 'Heredia'),
array('id' => 4, 'nombre' => 'Cartago'),
);
if(is_null($request)){
   $response = $provincias;
}
echo json_encode($response);
?>