<?php
   $request = json_decode(file_get_contents('php://input'));
   switch($request->id) {
      case 1: // San Jose
         $cantones = array(
            array('id' => 1, 'nombre' => 'Central'), 
            array('id' => 2, 'nombre' => 'Pavas') 
         );
         break;
      case 2: // Alajuela
         $cantones = array(
            array('id' => 1, 'nombre' => 'Alajuela'), 
            array('id' => 2, 'nombre' => 'San Ramón'),
            array('id' => 3, 'nombre' => 'Grecia') 
         );
         break;
      case 3: // Heredia
         $cantones = array(
            array('id' => 1, 'nombre' => 'Heredia'), 
            array('id' => 2, 'nombre' => 'Barva'),
            array('id' => 3, 'nombre' => 'Belén'),
            array('id' => 4, 'nombre' => 'Flores')
         );
         break;
      case 4: // Cartago
         $cantones = array(
            array('id' => 1, 'nombre' => 'Oreamuno'), 
            array('id' => 2, 'nombre' => 'El Guarco'),
            array('id' => 3, 'nombre' => 'Alvarado'),
            array('id' => 4, 'nombre' => 'Turrialba'),
            array('id' => 5, 'nombre' => 'Jiménez'),
            array('id' => 6, 'nombre' => 'La Unión')
         );
         break;
      case 5: // Guanacaste
         $cantones = array(
            array('id' => 1, 'nombre' => 'Liberia'), 
            array('id' => 2, 'nombre' => 'Abangares'),
            array('id' => 3, 'nombre' => 'Bagases'),
            array('id' => 4, 'nombre' => 'Cañas'),
            array('id' => 5, 'nombre' => 'Hojancha') 
         );
         break;
      case 6: // Puntarenas
         $cantones = array(
            array('id' => 1, 'nombre' => 'Quepos'), 
            array('id' => 2, 'nombre' => 'Parrita'),
            array('id' => 2, 'nombre' => 'Buenos Aires'),
            array('id' => 2, 'nombre' => 'Coto Brus')
         );
         break;
      case 7: // Limón
         $cantones = array(
            array('id' => 1, 'nombre' => 'Guácimo'), 
            array('id' => 2, 'nombre' => 'Matina'),
            array('id' => 3, 'nombre' => 'Talamanca') 
         );
         break;
      default:
         $cantones = array();
         break;
   }
   echo json_encode($cantones);