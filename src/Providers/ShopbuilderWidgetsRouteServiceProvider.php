<?php

namespace ShopbuilderWidgets\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class ShopbuilderWidgetsRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
       $router->get('hello','ShopbuilderWidgets\Controllers\ContentController@sayHello');
    }
}
