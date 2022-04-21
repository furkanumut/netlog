<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use TCG\Voyager\Models\Page;
use App\Models\SocialMediaUrl;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Carbon::setLocale(config('app.locale'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	view()->composer('*', function($view)
	{
        $page_data = Page::where('status', 'ACTIVE')->get();
        $social_media_urls = SocialMediaUrl::orderBy('updated_at','desc')->get();
        $view->with('pages', $page_data);
        $view->with('social_media_urls', $social_media_urls);
	});
	Schema::defaultStringLength(191);
    }
}
