<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
		Schema::defaultStringLength(191);
		
		// variabel hanya bisa dibaca di view
		$CONSTANT = array(
            'APP_CODE'=>'LARAVEL',
            'APP_NAME'=>'Contact Manager',
			"NAMA"=>"DIMAS"
        );
        view()->share($CONSTANT);
		
		//  
		//define("HELLO","hello world");
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
