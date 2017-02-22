<?php

namespace Toyopecas\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Toyopecas\Repositories\TopoRepository',
            'Toyopecas\Repositories\TopoRepositoryEloquent'
        );

        $this->app->bind(
            'Toyopecas\Repositories\ServicesRepository',
            'Toyopecas\Repositories\ServicesRepositoryEloquent'
        );

        $this->app->bind(
        'Toyopecas\Repositories\SobreRepository',
        'Toyopecas\Repositories\SobreRepositoryEloquent'
    );

        $this->app->bind(
            'Toyopecas\Repositories\ProdutosRepository',
            'Toyopecas\Repositories\ProdutosRepositoryEloquent'
        );
    }
}
