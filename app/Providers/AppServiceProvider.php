<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Illuminate\Contracts\Auth\Registrar', 'App\Services\Registrar'
        );

        $this->app->bind(
            'App\Repositories\VideoInterface', 'App\Repositories\Eloquent\VideoRepository'
        );

        $this->app->bind(
            'App\Repositories\VideoCategoryInterface', 'App\Repositories\Eloquent\VideoCategoryRepository'
        );

        $this->app->bind(
            'App\Repositories\TagInterface', 'App\Repositories\Eloquent\TagRepository'
        );

        $this->app->bind(
            'App\Repositories\PostInterface', 'App\Repositories\Eloquent\PostRepository'
        );

        $this->app->bind(
            'App\Repositories\PostCategoryInterface', 'App\Repositories\Eloquent\PostCategoryRepository'
        );

        $this->app->bind(
            'App\Repositories\UserInterface', 'App\Repositories\Eloquent\UserRepository'
        );

        $this->app->bind(
            'App\Repositories\CourtInterface', 'App\Repositories\Eloquent\CourtRepository'
        );

        $this->app->bind(
            'App\Repositories\EventInterface', 'App\Repositories\Eloquent\EventRepository'
        );

        $this->app->bind(
            'App\Repositories\InvitationInterface', 'App\Repositories\Eloquent\InvitationRepository'
        );
    }

}
