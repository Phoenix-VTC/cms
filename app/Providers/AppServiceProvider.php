<?php

namespace App\Providers;

use A17\Twill\Repositories\SettingRepository;
use App\Models\Employee;
use App\Models\Page;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        Relation::morphMap([
            'pages' => Page::class,
            'employees' => Employee::class,
        ]);

        Paginator::defaultView('site.partials.pagination');

        View::share('socials_settings', app(SettingRepository::class)->getFormFields('socials'));
    }
}
