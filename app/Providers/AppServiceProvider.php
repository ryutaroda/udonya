<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUseCases();
        $this->registerRepositories();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }


    private function registerUseCases()
    {
        // Site
        // Site.TopController.Top
        $this->app->bind(
            \App\UseCase\Site\TopController\Top\SiteTopTopUseCaseInterface::class,
            \App\Domain\Application\Site\TopController\SiteTopTopInteractor::class
        );
        // Site.ShopController.Index
        $this->app->bind(
            \App\UseCase\Site\ShopController\Index\SiteShopIndexUseCaseInterface::class,
            \App\Domain\Application\Site\ShopController\SiteShopIndexInteractor::class
        );
        // Site.ShopController.Show
        $this->app->bind(
            \App\UseCase\Site\ShopController\Show\SiteShopShowUseCaseInterface::class,
            \App\Domain\Application\Site\ShopController\SiteShopShowInteractor::class
        );
    }

    private function registerRepositories()
    {
        // Transaction
        $this->app->bind(
            \App\Domain\CommonRepository\DataStoreTransactionInterface::class,
            \App\Infrastracture\EloquentRepository\DataStoreTransactionRepository::class
        );
    }
}
