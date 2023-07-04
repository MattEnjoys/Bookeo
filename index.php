<?php
// On définit le chemin racine dans une constante
define('_ROOTPATH_', __DIR__);

spl_autoload_register();
use App\Controller\Controller;

$controller = new Controller();
$controller->route();

?>