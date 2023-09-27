<?php

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php"
    
];

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
} 

else {
    echo "error code:404";
}

?>
