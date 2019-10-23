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
                case 2:
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Alfa'),
                        array('id' => 2, 'nombre' => 'Asturias'),
                        array('id' => 3, 'nombre' => 'Asunción'),
                        array('id' => 4, 'nombre' => 'Aeropuerto'),
                        array('id' => 5, 'nombre' => 'Bribrí'),
                        array('id' => 6, 'nombre' => 'Rohrmoser')
                        );
                        break;
           }
       }
       case 2: // Alajuela
       {
            switch($request->canton) {
                case 1: // Alajuela
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Carrizal'),
                        array('id' => 2, 'nombre' => 'San Antonio'),
                        array('id' => 3, 'nombre' => 'Turrúcares'),
                        );
                        break;
                case 2: // San Ramón
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Zapotal'),
                        array('id' => 2, 'nombre' => 'Volio'),
                        array('id' => 3, 'nombre' => 'Concepción'),
                        array('id' => 4, 'nombre' => 'Peñas Blancas'),
                        );
                        break;
            }
       }
   } 
echo json_encode($distritos);