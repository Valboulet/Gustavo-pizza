<?php

use App\Router;

require dirname(__DIR__) . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . '/views');
$router 
    ->get('/', 'access/index', 'home')
    ->get('/login', 'access/login', 'login')
    ->get('/pizzas', 'customer/pizzas', 'pizzas')
    ->get('/order', 'customer/order', 'commande')
    ->get('/account', 'customer/account', 'compte')
    ->get('/admin-drinks', 'admin/drinks', 'admin_drinks')
    ->get('/admin-extras', 'admin/extras', 'admin_extras')
    ->get('/admin-pizzas', 'admin/pizzas', 'admin_pizzas')
    ->get('/admin-orders', 'admin/orders', 'admin_orders')
    ->run();

?>