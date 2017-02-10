<?php
namespace Qsoftvn\SiteBuilder\Facades;
use Illuminate\Support\Facades\Facade;

class SiteBuilder extends Facade{
    protected static function getFacadeAccessor() { return 'Qsoftvn\SiteBuilder\Helpers\SiteBuilder'; }
}