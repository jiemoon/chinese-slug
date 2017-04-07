<?php

namespace Jiemoon\ChineseSlug;

use Illuminate\Support\ServiceProvider;

class ChineseSlugServiceProvider extends ServiceProvider
{
    /**
     * 延迟加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('chineseslug', function() {
            return new ChineseSlug(new ChineseSlugRepository);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ChineseSlug::class];
    }
}

