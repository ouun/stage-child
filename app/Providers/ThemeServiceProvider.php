<?php

namespace App\Providers;

use Stage\Providers\StageServiceProvider;

class ThemeServiceProvider extends StageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * Register Stage Parent Theme Variables
         */
        $this->app->bind('stage', function() {
            return [
                'path' => get_template_directory() . '/app',
                'namespace' => 'Stage\\',
            ];
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * @throws \ReflectionException
     */
    public function boot()
    {
        /**
         * Include Stage View Composers
         */
        $this->attachStageComposers();
    }
}
