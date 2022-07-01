<?php
require_once 'libs/Router/Router.php';
require_once 'api/apiTurnController.php';

// CONSTANTES PARA RUTEO
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');

// creo el router
$router = new Router();

// tabla de ruteo
$router->addRoute(
    'turnos/:ID_PACIENTE',
    'GET',
    'ApiTurnController',
    'getTurnsByPatientId'
);

$router->addRoute(
    'turnoConfirmado/:ID_TURNO',
    'GET',
    'ApiTurnController',
    'getTurnsById'
);

$router->addRoute(
    'turnos/medico/:ID_MEDICO',
    'GET',
    'ApiTurnController',
    'getTurnsByMedicalId'
);

$router->addRoute(
    'confirmarTurno/:ID_TURNO',
    'POST',
    'ApiTurnController',
    'confirmTurn'
);


// rutea
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);
