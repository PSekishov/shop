<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
   public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('CATEGORY');
            $event->menu->add([
                'text' => 'Category',
                'url' => 'admin/category',
            ]);

             $event->menu->add([
                'text' => 'Add category',
                'url' => 'admin/category/create',
            ]);

        });


        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            
            $event->menu->add('PRODUCT');
            $event->menu->add([
                'text' => 'Product',
                'url' => 'admin/product',
            ]);

             $event->menu->add([
                'text' => 'Add product',
                'url' => 'admin/product/create',
            ]);

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
