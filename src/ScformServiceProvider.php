<?php

namespace Scform;

use Illuminate\Support\ServiceProvider;

class ScformServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/./../resources/views','scform');
    }

    public function register(){
        $this->app->bind("input",function(){
            return new Input();
        });
        $this->app->bind("form",function(){
            return new Form();
        });
        $this->app->bind("post",function(){
            return new Post();
        });
    }
}