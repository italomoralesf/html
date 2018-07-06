<?php

namespace Italomoralesf\Html;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {        
        $this->runView();

        //form
        Form::component('rCKEditor', 'form::ckeditor', ['name',    'label']);
        Form::component('rEmail',    'form::email',    ['label',   'attributes']);
        Form::component('rHidden',   'form::hidden',   ['name',    'value']);
        Form::component('rImage',    'form::image',    ['name',    'label',   'attributes']);
        Form::component('rRadio',    'form::radio',    ['items',   'name',    'label']);
        Form::component('rSelect',   'form::select',   ['items',   'name',    'label']);
        Form::component('rSubmit',   'form::submit',   ['label',   'color',   'size']);
        Form::component('rText',     'form::text',     ['name',    'label',   'attributes']);
        Form::component('rPassword', 'form::password', ['label']);
        Form::component('rTextarea', 'form::textarea', ['name',    'label',   'attributes']);
        Form::component('rCheckbox', 'form::checkbox', ['name',    'value',   'label',   'attributes']);
        Form::component('rButton',   'form::button',   ['label',   'color',   'size']);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function runView()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/components/form',     'form');      
        $this->loadViewsFrom(__DIR__ . '/../resources/views/components/template', 'template');      
    }
}
