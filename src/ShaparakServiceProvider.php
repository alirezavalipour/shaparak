<?php

namespace Shaparak;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Shaparak\Database\seeders\AcceptorTableSeeder;
use Shaparak\Database\seeders\ContractTableSeeder;
use Shaparak\Database\seeders\MerchantTableSeeder;
use Shaparak\Database\seeders\ShopTableSeeder;
use Shaparak\Database\seeders\TerminalTableSeeder;
use Shaparak\Facades\ShaparakFacade;
use Shaparak\Service\Requests\Shaparak;

class ShaparakServiceProvider extends ServiceProvider
{

    protected $namespace = 'Shaparak\Http\Controller';

    public function register()
    {
        \DatabaseSeeder::$seeders[] = AcceptorTableSeeder::class;
        \DatabaseSeeder::$seeders[] = ContractTableSeeder::class;
        \DatabaseSeeder::$seeders[] = MerchantTableSeeder::class;
        \DatabaseSeeder::$seeders[] = ShopTableSeeder::class;
        \DatabaseSeeder::$seeders[] = AcceptorTableSeeder::class;
        \DatabaseSeeder::$seeders[] = TerminalTableSeeder::class;
        ShaparakFacade::shouldProxyTo(Shaparak::class);

    }

    public function boot()
    {


        $this->publishes([
            __DIR__ . './../config/shaparak.php' => config_path('shaparak.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/resources/views' => base_path('resources/views/vendor/shaparak'),
        ], 'config');

        Route::group(['middleware' => 'web', 'prefix' => 'shaparak'],
            function () {
                require(__DIR__ . '/routes/web.php');
            });

        //        Route::group([
        //            'namespace' => 'your/folder', //FILE CONTAIN YOUR CONTROLLER
        //        ], function () {
        //
        //        });

        //        Route::prefix('shaparak')
        //            ->namespace($this->namespace)
        //            ->middleware('web')
        //            ->group(__DIR__ . '/routes/web.php');

//        Route::prefix('shaparak/api')->middleware('api')
//            ->group(__DIR__ . '/routes/api.php');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'shaparak');

        $this->mergeConfigFrom(__DIR__ . './../config/shaparak.php', 'shaparak');

        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');

    }
}
