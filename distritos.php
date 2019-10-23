<?php
   $request = json_decode(file_get_contents('php://input'));
   switch($request->provincia) {
       case 1: // SJ
       {
           switch($request->canton) {
                case 1: // Central
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Carmen'),
                        array('id' => 2, 'nombre' => 'Merced'),
                        array('id' => 3, 'nombre' => 'Hospital'),
                        array('id' => 4, 'nombre' => 'Catedral'),
                        array('id' => 5, 'nombre' => 'Zapote'),
                        array('id' => 6, 'nombre' => 'La Uruca')
                        );
                        break;
                case 2: // Pavas
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Alfa'),
                        array('id' => 2, 'nombre' => 'Asturias'),
                        array('id' => 3, 'nombre' => 'Asunción'),
                        array('id' => 4, 'nombre' => 'Aeropuerto'),
                        array('id' => 5, 'nombre' => 'Bribrí'),
                        array('id' => 6, 'nombre' => 'Rohrmoser')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
           }
           break;
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
                        array('id' => 4, 'nombre' => 'Peñas Blancas')
                        );
                        break;
                case 3: // Grecia
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'San Isidro'),
                        array('id' => 2, 'nombre' => 'San Roque'),
                        array('id' => 3, 'nombre' => 'Poró'),
                        array('id' => 4, 'nombre' => 'Rincón de Arias'),
                        array('id' => 5, 'nombre' => 'Tacares')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
       case 3: // Heredia
       {
            switch($request->canton) {
                case 1: // Heredia
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Heredia'),
                        array('id' => 2, 'nombre' => 'Mercedez'),
                        array('id' => 3, 'nombre' => 'San Francisco'),
                        array('id' => 4, 'nombre' => 'Ulloa')
                        );
                        break;
                case 2: // Barva
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'San Pedro'),
                        array('id' => 2, 'nombre' => 'San Roque'),
                        array('id' => 3, 'nombre' => 'Santa Lucía')
                        );
                        break;
                case 3: // Belén 
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'La Asunción'),
                        array('id' => 2, 'nombre' => 'La Riviera'),
                        array('id' => 3, 'nombre' => 'San Antonio')
                        );
                        break;
                case 3: // Flores 
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Barrantes'),
                        array('id' => 2, 'nombre' => 'Llorente'),
                        array('id' => 3, 'nombre' => 'San Joaquín')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
       case 4: // Cartago
       {
            switch($request->canton) {
                case 1: // Oreamuno
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Cipreses'),
                        array('id' => 2, 'nombre' => 'Cot'),
                        array('id' => 3, 'nombre' => 'Potrero Cerrado')
                        );
                        break;
                case 2: // El Guarco
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Patio de Agua'),
                        array('id' => 2, 'nombre' => 'San Isidro'),
                        array('id' => 3, 'nombre' => 'Tejar'),
                        array('id' => 4, 'nombre' => 'Tobosi')
                        );
                        break;
                case 3: // Alvarado
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Capellades'),
                        array('id' => 2, 'nombre' => 'Cervantes'),
                        array('id' => 3, 'nombre' => 'Pacayas')
                        );
                        break;
                case 4: // Turrialba
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Chirripó'),
                        array('id' => 2, 'nombre' => 'La Suiza'),
                        array('id' => 3, 'nombre' => 'La isabel'),
                        array('id' => 4, 'nombre' => 'Pavones')
                        );
                        break;
                case 5: // Jiménez
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Tucurrique'),
                        array('id' => 2, 'nombre' => 'Pejibaye'),
                        array('id' => 3, 'nombre' => 'Juan Viñas')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
       case 5: // Guanacaste
       {
            switch($request->canton) {
                case 1: // Liberia
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Currubandé'),
                        array('id' => 2, 'nombre' => 'Mayorga'),
                        array('id' => 3, 'nombre' => 'Nacascolo'),
                        );
                        break;
                case 2: // Abangares
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Colorado'),
                        array('id' => 2, 'nombre' => 'Las Juntas'),
                        array('id' => 3, 'nombre' => 'Sierra'),
                        array('id' => 4, 'nombre' => 'San Juan'),
                        );
                        break;
                case 3: // Bagases
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'La Fortuna'),
                        array('id' => 2, 'nombre' => 'Mogote'),
                        array('id' => 3, 'nombre' => 'Río Naranjo')
                        );
                        break;
                case 4: // Cañas
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Palmira'),
                        array('id' => 2, 'nombre' => 'Porozal'),
                        array('id' => 3, 'nombre' => 'San Miguel'),
                        array('id' => 4, 'nombre' => 'Cañas')
                        );
                        break;
                case 5: // Hojancha
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Monte Romo'),
                        array('id' => 2, 'nombre' => 'Huacas'),
                        array('id' => 3, 'nombre' => 'Puerto Carrillo')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
       case 6: // Puntarenas
       {
            switch($request->canton) {
                case 1: // Quepos
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Naranjito'),
                        array('id' => 2, 'nombre' => 'Savegre'),
                        array('id' => 3, 'nombre' => 'Quepos'),
                        );
                        break;
                case 2: // Parrita
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Parrita')
                        );
                        break;
                case 3: // Buenos Aires
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Colinas'),
                        array('id' => 2, 'nombre' => 'Chánguena'),
                        array('id' => 3, 'nombre' => 'Brunka'),
                        array('id' => 4, 'nombre' => 'Boruca'),
                        array('id' => 5, 'nombre' => 'Biolley')
                        );
                        break;
                case 4: // Coto Brus
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Pittier'),
                        array('id' => 2, 'nombre' => 'Limoncito'),
                        array('id' => 3, 'nombre' => 'San Vito'),
                        array('id' => 4, 'nombre' => 'Gutiérrez Brown'),
                        array('id' => 5, 'nombre' => 'Aguabuena')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
       case 7: // Limón
       {
            switch($request->canton) {
                case 1: // Guácimo
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Pocora'),
                        array('id' => 2, 'nombre' => 'Duacarí'),
                        array('id' => 3, 'nombre' => 'Río Jiménez'),
                        );
                        break;
                case 2: // Matina
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Matina'),
                        array('id' => 2, 'nombre' => 'Carrandi'),
                        array('id' => 3, 'nombre' => 'Batán')
                        );
                        break;
                case 3: // Talamanca
                    $distritos = array(
                        array('id' => 1, 'nombre' => 'Cahuita'),
                        array('id' => 2, 'nombre' => 'Bratsi'),
                        array('id' => 3, 'nombre' => 'Telire'),
                        array('id' => 4, 'nombre' => 'Sixaola')
                        );
                        break;
                default:
                    $distritos = array();
                    break;
            }
            break;
       }
   } 
echo json_encode($distritos);