<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\FooterPage;
use App\Models\HeaderPage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole() && request()->hasHeader('Host')) {
            URL::forceRootUrl(request()->getSchemeAndHttpHost());
        }

        View::share('departments', Department::allPublished());

        $headerPage = null;
        if (Schema::hasTable('header_pages')) {
            $headerPage = HeaderPage::current();
        }
        View::share('headerData', $headerPage?->content_data ?? []);

        $footerPage = null;
        if (Schema::hasTable('footer_pages')) {
            $footerPage = FooterPage::current();
        }
        View::share('footerData', $footerPage?->content_data ?? []);

        foreach ([
            public_path('images/slider'),
            public_path('images/about'),
            public_path('images/services'),
            public_path('images/blog'),
            public_path('images/partners'),
            public_path('images/background'),
            public_path('images/departments'),
            public_path('images/events'),
            public_path('images/facilities'),
            public_path('images/gallery'),
            public_path('images/news'),
            public_path('images/team'),
            public_path('documents'),
            public_path('livewire-tmp'),
            storage_path('app/private/livewire-tmp'),
            storage_path('app/livewire-tmp'),
        ] as $directory) {
            File::ensureDirectoryExists($directory);
        }
    }
}
