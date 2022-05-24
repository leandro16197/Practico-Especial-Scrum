<?php
require_once './Controller/TurnosController.php';
define("BASE_URL", 'http://' . $_SERVER["SERVER_NAME"] . ':' . $_SERVER["SERVER_PORT"] . dirname($_SERVER["PHP_SELF"]) . '/');


if (!empty($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = 'home';
}
$TurnosController = new TurnosController();

$params = explode('/', $action);
switch ($params[0]) {
    case 'home':
        $TurnosController->getHome();
        break;
    case 'verTurno':
        $TurnosController->getHome();
    case 'verTurnosMedico':
        $TurnosController->getTurnsOfMedical();
    case 'verTurnoConfirmado':
        $TurnosController->showConfirmTurn();
    default:
        $TurnosController->getHome();
        break;
}
