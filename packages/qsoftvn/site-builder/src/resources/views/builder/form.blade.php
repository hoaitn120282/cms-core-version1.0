<?php
$component = 'cfg_theme';
switch ($continue) {
    case 2:
        $component = 'cfg_theme';
        break;
    case 3:
        $component = 'cfg_layout';
        break;
    case 3:
        $component = 'cfg_database';
        break;
    case 4:
        $component = 'cfg_ftp';
        break;
    case 5:
        $component = 'cfg_site';
        break;
    case 6:
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
                <li class="{{ in_array($continue, [2,3,4])?: 'active' }}">Choose theme</li>
                <li class="{{ 2 == $continue?'active':'' }}">Configure layout</li>
                <li class="{{ 3 == $continue?'active':'' }}">Configure site</li>
                <li class="{{ 4 == $continue?'active':'' }}">Set up database</li>
                <li class="{{ 5 == $continue?'active':'' }}">Set up FTP</li>
                <li class="{{ 6 == $continue?'active':'' }}">Complete</li>
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

    /*  Panel-theme */
    .form-site-builder .panel-theme .thumbnail {
        width: 100%;
        max-height: 100%;
        position: relative;
        margin: 0 auto;
        background: #fff;
    }

    .form-site-builder .panel-theme .thumbnail .x_checkbox {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        cursor: pointer;
        background: #fff;
    }

    .form-site-builder .panel-theme .thumbnail .x_checkbox:after {
        content: '';
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        opacity: 0;
        transition: all 0.5s ease;
        border: 5px solid #1ABB9C;
        position: absolute;
    }

    .form-site-builder .panel-theme .thumbnail .x_checkbox:hover::after {
        opacity: 1;
    }

    .form-site-builder .panel-theme .thumbnail input[type=checkbox] {
        visibility: hidden;
    }

    .form-site-builder .panel-theme .thumbnail input[type=checkbox]:checked + label:after {
        opacity: 1;
    }
</style>
@endpush

@push('scripts')
@endpush