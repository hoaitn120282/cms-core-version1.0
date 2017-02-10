<?php
Route::get('SiteBuilder/index',['as' => $this->admin_prefix.'.siteBuilder.index', 'uses' => 'SiteBuilderController@index']);
Route::get('SiteBuilder/build',['as' => $this->admin_prefix.'.siteBuilder.build', 'uses' => 'SiteBuilderController@build']);
Route::post('SiteBuilder/build/store',['as' => $this->admin_prefix.'.siteBuilder.build.store', 'uses' => 'SiteBuilderController@store']);
