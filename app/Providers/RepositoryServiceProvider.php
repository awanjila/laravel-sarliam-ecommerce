<?php

namespace App\Providers;
use App\Contracts\BrandContract;
use App\Repositories\BrandRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    protected $repositories = [
    CategoryContract::class         =>          CategoryRepository::class,
    AttributeContract::class        =>          AttributeRepository::class,
    BrandContract::class            =>          BrandRepository::class,
];
}
