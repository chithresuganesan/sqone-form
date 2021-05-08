<?php
namespace Sqone\Form;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'form');
        $this->mergeConfigFrom(__DIR__.'/config/form.php', 'form');

        $this->publishes([
        __DIR__.'/config/form.php' => config_path('form.php'),]);
        $this->publishes([
        __DIR__.'/views' => resource_path('views'),
    ]);



    }

    public function register()
    {
        # code...
    }
}
 ?>
