<?php
namespace Qsoftvn\SiteBuilder\Providers;

use Qsoftvn\SiteBuilder\Helpers\SiteBuilder;

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
    public function boot()
    {
        $pkg_path = dirname(__DIR__);
        $views_path = $pkg_path . '/resources/views';
        $this->loadViewsFrom($views_path, 'SiteBuilder');
        $this->publishes([
            $views_path => base_path('resources/views/vendor/SiteBuilder')
        ]);

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        // Use for version >= 5.3.*
        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->publishes([
            __DIR__ . '/../config/qsoftvn/' => config_path('qsoftvn')
        ], 'config');

        parent::boot();
    }

    public function register()
    {
        $this->registerSiteBuilder();
        $this->app->alias('SiteBuilder', 'Qsoftvn\SiteBuilder\Facades\SiteBuilder');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/qsoftvn/sitebuilder.php', 'qsoftvn.sitebuilder'
        );
    }

    protected function registerSiteBuilder()
    {
        $this->app->singleton('SiteBuilder', function ($app) {
            $siteBuilder = new SiteBuilder($app['session.store']->getToken());

            return $siteBuilder->setSessionStore($app['session.store']);
        });
    }

}