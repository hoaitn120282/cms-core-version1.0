<?php
$component = 'config_database';
switch ($continue) {
    case 2:
        $component = 'config_ftp';
        break;
    case 3:
        $component = 'config_site';
        break;
    case 4:
        break;
}
$form = array(
        'action' => Admin::route('siteBuilder.build.store'),
        'method' => 'POST'
);
?>
@extends('layouts.admin')

@section('content')
    <div class="row form-site-builder">
        <div class="col-md-3">
            <ol class="task-list">
                <li class="{{ in_array($continue, [2,3,4])?: 'active' }}">Set up database</li>
                <li class="{{ 2 == $continue?'active':'' }}">Set up FTP</li>
                <li class="{{ 3 == $continue?'active':'' }}">Configure site</li>
                <li class="{{ 4 == $continue?'active':'' }}">Configure theme</li>
            </ol>
        </div><!-- /.list-step-install -->
        <div class="col-md-9">
            <form action="{{ $form['action'] }}"
                  method="{{ $form['method'] }}"
                  name="build-site"
                  class="form-builder-site">
                {{ csrf_field() }}
                @include('SiteBuilder::builder.components.'.$component, compact('form'))
            </form>
        </div><!-- /.main-step-install -->
    </div>
@endsection

@push('style-top')
<style>
    .form-site-builder .task-list li.active {
        font-weight: 700;
    }
</style>
@endpush

@push('scripts')
@endpush