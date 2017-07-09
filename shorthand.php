<?php

use Mira\Route;
use Mira\Render;

function get($url, $closure)
{
    return Route::get($url, $closure);
}

function view($app, $variables = [])
{
    return Render::view($app, $variables);
}
