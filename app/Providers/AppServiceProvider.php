<?php

namespace App\Providers;

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
    // Prevent Telescope (and similar dev-only packages) from registering in production
    // Guarded: only attempt to register if TELESCOPE_ENABLED is true and the class exists.
    if (env('TELESCOPE_ENABLED', false) && class_exists('\\Laravel\\Telescope\\TelescopeServiceProvider')) {
      // Register by string to avoid static analyzers trying to resolve the class when
      // the package may not be installed on production.
      $this->app->register('Laravel\\Telescope\\TelescopeServiceProvider');
    }
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }
}
