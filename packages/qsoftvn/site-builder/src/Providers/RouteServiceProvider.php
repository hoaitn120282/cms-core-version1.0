<?php

namespace Qsoftvn\SiteBuilder\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This admin is applied to your controller routes.
     *
     * @var string
     */
    protected $admin_prefix;

    /**
     * This middleware is applied to your controller routes.
     *
     * @var array
     */
    protected $middleware;

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Qsoftvn\SiteBuilder\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        $this->admin_prefix = config("qsoftvn.sitebuilder.admin_prefix");
        $this->middleware = config("qsoftvn.sitebuiler.middleware");
        $this->middleware = is_array($this->middleware) ? $this->middleware : (array)$this->middleware;
        //
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $pkg_path = dirname(__DIR__);
        $router->group([
            'prefix' => $this->admin_prefix,
            'namespace' => $this->namespace,
            'middleware' => array_merge(['web'], $this->middleware),
        ], function ($router) use ($pkg_path) {
            require self::pkg_path('routes/web.php');
        });
    }

    /**
     *
     */
    protected function pkg_path($path = null)
    {
        $pkg_path = dirname(__DIR__);
        $pkg_path = empty($path) ?: $pkg_path . '/' . $path;

        return $pkg_path;
    }
}
