<?php

include('../include.php');

$controller = new app\Controllers\PaysController();
$view = $controller->index();
$view->display();