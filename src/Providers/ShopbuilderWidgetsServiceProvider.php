<?php

namespace ShopbuilderWidgets\Providers;


use Plenty\Plugin\ServiceProvider;

class ShopbuilderWidgetsServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
       $this->getApplication()->register(ShopbuilderWidgetsRouteServiceProvider::class);
    }


    public function boot()
    {
      
    }


}
