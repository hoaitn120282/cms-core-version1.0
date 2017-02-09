<?php
namespace Qsoftvn\SiteBuilder\Providers;

use Illuminate\Foundation\AliasLoader;
use Qsoftvn\SiteBuilder\Helpers\SBuilder;

/**
 * ServiceProvider
 *
 * The service provider for the modules. After being registered
 * it will make sure that each of the modules are properly loaded
 * i.e. with their routes, views etc.
 *
 * @author Kamran Ahmed <kamranahmed.se@gmail.com>
 * @package App\Modules
 */
class AppServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Will make sure that the required modules have been fully loaded
     * @return void
     */
    public $admin;

    public function boot()
    {
        $pkg_path = dirname(__DIR__);
        $views_path = $pkg_path . '/resources/views';
        $this->loadViewsFrom($views_path, 'SiteBuilder');
        $this->publishes([
            $views_path => base_path('resources/views/vendor/SiteBuilder')
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        parent::boot();
    }

    public function register()
    {
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Admin', 'App\Facades\Admin');
            $file = app_path('Helpers/Admin.php');
            if (file_exists($file)) {
                include $file;
            }
        });

    }

    protected function registerSiteBuilder()
    {
        $this->app->singleton('SiteBuilder', function($app) {
            $siteBuilder = new SBuilder($app['session.store']->getToken());

            return $siteBuilder
        });
    }

}