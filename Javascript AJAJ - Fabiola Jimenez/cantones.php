<?php
$request = json_decode(file_get_contents('php://input'));
switch($request->provincia) {
    case 1:
        $cantones = array(
            array('id' => 1, 'nombre' => 'Montes de Oca'),
            array('id' => 2, 'nombre' => 'Escazu')
        );
        break;
    case 2:
        $cantones = array(
            array('id' => 3, 'nombre' => 'Zarcero'),
            array('id' => 4, 'nombre' => 'San Carlos')
        );
        break;
    case 3:
        $cantones = array(
            array('id' => 5, 'nombre' => 'Belen'),
            array('id' => 6, 'nombre' => 'Santo Domingo')
        );
        break;  
    case 4:
        $cantones = array(
            array('id' => 7, 'nombre' => 'Cartago'),
            array('id' => 8, 'nombre' => 'Carmen')
        );
        break;   
    default:
        $cantones = array();
        break;
}
echo json_encode($cantones);
?>