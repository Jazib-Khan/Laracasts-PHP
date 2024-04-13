<?php

function dd($value) 
{
    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();    
}

function urlIs($value) 
{
    return $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : 'text-gray-300';
}

function authorize($condition, $statusCode = Response::FORBIDDEN) 
{
    if (! $condition) {
        abort($statusCode);
    }
}

function base_path($path)
{ 
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{ 
    extract($attributes);

    require base_path('views/' . $path);
}