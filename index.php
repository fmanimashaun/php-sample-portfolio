<?php
// load function file
require "core/function.php";

// load routes file
$routes = require "routes.php";

// get current url
$url = $_SERVER["REQUEST_URI"];

// route to controller
routeToController($url, $routes);
