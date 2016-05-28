<?php

    namespace App\Providers;

    use Auth;
    use Cartalyst\Sentinel\Sentinel;
    use Illuminate\Support\ServiceProvider;

    class AdminServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap the application services.
         *
         * @return void
         */
        public
        function boot()
        {
            Auth::provider('our_provider', function($app, array $config)  {

                return new Sentinel();
            });
        }

        /**
         * Register the application services.
         *
         * @return void
         */
        public
        function register()
        {
            //
        }
    }
