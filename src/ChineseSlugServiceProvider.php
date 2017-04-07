<?php

namespace Jiemoon\ChineseSlug;

use Illuminate\Support\ServiceProvider;

class ChineseSlugServiceProvider extends ServiceProvider
{
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
}

