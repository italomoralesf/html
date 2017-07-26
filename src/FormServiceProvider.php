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

        
        Form::component('rText',     'italomoralesf::components.form.text',    ['name', 'label', 'attributes']);
        Form::component('rTextarea', 'italomoralesf::components.form.textarea',['name', 'label', 'attributes']);
        Form::component('rEditor',   'italomoralesf::components.form.editor',  ['name', 'label', 'attributes']);
        Form::component('rSearch',   'italomoralesf::components.form.search',  ['name', 'route']);
        Form::component('rImage',    'italomoralesf::components.form.image',   ['name', 'label']);
        Form::component('rRadio',    'italomoralesf::components.form.radio',   ['name', 'label', 'items']);
        Form::component('rSelect',   'italomoralesf::components.form.select',  ['name', 'label', 'items']);
        Form::component('rSubmit',   'italomoralesf::components.form.submit',  ['label']);
        Form::component('rHidden',   'italomoralesf::components.form.hidden',  ['name', 'value']);
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'italomoralesf');        
    }
}
