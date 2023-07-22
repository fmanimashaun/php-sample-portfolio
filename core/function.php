<?php

function view($path, $attribute = [])
{
  extract($attribute);
  return require "views/{$path}.view.php";
}

function routeToController($pageUrl, $routesArray)
{
  if (array_key_exists($pageUrl, $routesArray)) {
    require "controllers/{$routesArray[$pageUrl]}.php";
  } else {
    return abort(404);
  }
}


function abort ($code)
{
  if ($code === 404) {
    return require "views/errors/{$code}.view.php";
  }
}