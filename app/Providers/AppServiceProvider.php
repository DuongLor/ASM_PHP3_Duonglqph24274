<?php

namespace App\Providers;

use App\Models\Hotel;
use App\Composers\HomeComposer;
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
		view()->composer('*', HomeComposer::class);
		Schema::defaultStringLength(191); // add: default varchar(191)
	}
}
