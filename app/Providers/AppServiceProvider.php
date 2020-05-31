<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Http\Resources\Json\JsonResource;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(Session('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
        }
        JsonResource::withoutWrapping();
     
    }
}
