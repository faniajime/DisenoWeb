<?php
$request = json_decode(file_get_contents('php://input'));
switch($request->canton) {
    case 1:
        $distritos = array(
            array('id' => 1, 'nombre' => 'Mercedes'),
            array('id' => 2, 'nombre' => 'Sabanilla')
        );
        break;
    case 2:
        $distritos = array(
            array('id' => 3, 'nombre' => 'Escazu'),
            array('id' => 4, 'nombre' => 'San Atonio')
        );
        break;
    case 3:
        $distritos = array(
            array('id' => 5, 'nombre' => 'Zarcero'),
            array('id' => 6, 'nombre' => 'Tapezco')
        );
        break;  
    case 4:
        $distritos = array(
            array('id' => 7, 'nombre' => 'Ciudad Quesada'),
            array('id' => 8, 'nombre' => 'La Fortuna')
        );
        break;  
    case 5:
        $distritos = array(
            array('id' => 9, 'nombre' => 'San Antonio'),
            array('id' => 10, 'nombre' => 'Rivera')
        );
        break;  
    case 6:
        $distritos = array(
            array('id' => 11, 'nombre' => 'Santo Domingo'),
            array('id' => 12, 'nombre' => 'San Vicente')
        );
        break;
    case 7:
        $distritos = array(
            array('id' => 13, 'nombre' => 'Carmen'),
            array('id' => 14, 'nombre' => 'Guadalupe')
        );
        break; 
    case 8:
        $distritos = array(
            array('id' => 15, 'nombre' => 'Turrialba'),
            array('id' => 16, 'nombre' => 'La Suiza')
        );
        break; 
    default:
        $distritos = array();
        break;
}
echo json_encode($distritos);
?>