<?php

header('Content-Type: application/json');

require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';
require_once 'responses/consultarTodosResponses.php';

$C1 = new Club();
$C1->Nombre = 'Paris Saint-Germain Football Club';
$C1->Fundacion = '2 de Agosto de 1970 (52 años)';
$C1->Presidente = 'Nasser Al-Khelaifi';

$C2 = new Club();
$C2->Nombre = 'Manchester United Football Club';
$C2->Fundacion = '5 de Marzo de 1878 (144 años)';
$C2->Presidente = 'Joel Glazer';

$J1 = new Jugador();
$J1->Id = 1;
$J1->Nombre = 'Lionel Andres Messi';
$J1->Apodos = 'La Pulga, El Mesías, D10S';
$J1->Club = $C1;
$J1->Altura = '1.70m';

$J2 = new Jugador();
$J2->Id = 2;
$J2->Nombre = 'Lisandro Martínez';
$J2->Apodos = 'Licha';
$J2->Club = $C2;
$J2->Altura = '1.75m';

$res = new consultarTodosResponses();
$res->ListJugadores[] = $J1;
$res->ListJugadores[] = $J2;

echo json_encode($res);
