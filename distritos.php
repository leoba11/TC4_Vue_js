<?php
   $request = json_decode(file_get_contents('php://input'));
   switch($request->provincia) {
       case 1: // SJ
       {
           switch($request->canton) {
               case 1:
               $distritos = array(
                   array('id' => 1, 'nombre' => 'Carmen'),
                   array('id' => 2, 'nombre' => 'Merced'),
                   array('id' => 3, 'nombre' => 'Hospital'),
                   array('id' => 4, 'nombre' => 'Catedral'),
                   array('id' => 5, 'nombre' => 'Zapote'),
                   array('id' => 6, 'nombre' => 'La Uruca')
                );
                break;
           }
       }
   } 
echo json_encode($distritos);