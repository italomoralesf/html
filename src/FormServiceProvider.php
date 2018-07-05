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

        
        Form::component('rCKEditor', 'html::components.form.ckeditor', ['name',    'label']);
        Form::component('rEmail',    'html::components.form.email',    ['label',   'attributes']);
        Form::component('rHidden',   'html::components.form.hidden',   ['name',    'value']);
        Form::component('rImage',    'html::components.form.image',    ['name',    'label',   'attributes']);
        Form::component('rRadio',    'html::components.form.radio',    ['items',   'name',    'label']);
        Form::component('rSelect',   'html::components.form.select',   ['items',   'name',    'label']);
        Form::component('rSearch',   'html::components.form.search',   ['route',   'name',    'attributes']);
        Form::component('rSubmit',   'html::components.form.submit',   ['label',   'color',   'attributes']);
        Form::component('rText',     'html::components.form.text',     ['name',    'label',   'attributes']);
        Form::component('rTextarea', 'html::components.form.textarea', ['name',    'label',   'attributes']);
        Form::component('rCheckbox', 'html::components.form.checkbox', ['name',    'value',   'attributes']);
        Form::component('rButton',   'html::components.form.button',   ['label',   'color',   'attributes']);

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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'html');        
    }
}
