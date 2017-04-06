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
        $this->publishes([
            __DIR__.'/config/chineseslug.php' => config_path('chineseslug.php'),
        ]);
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
}

