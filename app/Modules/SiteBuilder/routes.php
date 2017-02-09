<?php
Route::group([
    'prefix' => $this->admin,
    'middleware' => ['web','admin'],
    'namespace' => 'SiteBuilder\Controllers'], function () {
    Route::get('SiteBuilder/index',['as' => $this->admin.'.siteBuilder.index', 'uses' => 'SiteBuilderController@index']);
    Route::get('SiteBuilder/build',['as' => $this->admin.'.siteBuilder.build', 'uses' => 'SiteBuilderController@build']);
    Route::post('SiteBuilder/build/store',['as' => $this->admin.'.siteBuilder.build.store', 'uses' => 'SiteBuilderController@store']);

});