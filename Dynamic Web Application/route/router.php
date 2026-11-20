<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
// parse_url means built-in function that breaks a URL into its individual components, such as the scheme, host, path, query string, and fragment

$routes = [ // array with path and where that path will go
    '/' => 'controllers/index.php', // example here path of '/' it will go to controllers/index.php which is the default or Home
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) //function to route to the controller folder
{
    if (array_key_exists($uri, $routes)) { // array_key_exists() is a built-in function that checks whether a specific key exists in an array it Return True or False
        require $routes[$uri];
    } else {
        abort(404);
    }
}
function abort($code)
{
    http_response_code($code);
    require __DIR__ . "/../views/{$code}.view.php";
    die(); // this will stop the executions 
}

routeToController($uri, $routes);