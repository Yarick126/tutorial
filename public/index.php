<?php

require_once '../app/bootstrap.php';

$router = new Router();

$router->route($_SERVER['REQUEST_URI']);