<?php

include 'Router.php';


var_dump($_SERVER['REQUEST_URI']);
var_dump($_GET['val']);
$route=new Router();

$route->add('/',function(){
    echo "Hello World";
});

$route->add('/about',function(){
    echo "Hello about";
});


$route->run();