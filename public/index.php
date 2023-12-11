<?php

use App\Router;

require dirname(__DIR__) . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router(dirname(__DIR__) . '/views');
$router
    // ->get('/fill', 'command/fill', 'fill')
    ->get('/', 'access/index', 'home')
    ->getPost('/login', 'access/login', 'login')
    ->post('/logout', 'access/logout', 'logout')
    ->get('/order', 'customer/order', 'order')
    ->get('/account', 'customer/account', 'account')
    ->get('/admin-drinks', 'admin/drinks', 'admin_drinks')
    ->get('/admin-extras', 'admin/extras', 'admin_extras')
    ->get('/admin-pizzas', 'admin/pizzas', 'admin_pizzas')
    ->get('/admin-orders', 'admin/orders', 'admin_orders')
    ->run();
?>