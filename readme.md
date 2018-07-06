Extension of the HTML component in LARAVEL

Based on: LaravelCollective, Official documentation for Forms & Html for The Laravel Framework can be found at the [LaravelCollective](http://laravelcollective.com) website.

# Laravel 5.5

# Plantillas (template)
    
### Alert

```php
@component('template::alert')
	<strong>Advertencia</strong> por favor, corregir...
@endcomponent
```

```php
@component('template::alert', ['color' => 'danger'])
	<strong>Advertencia</strong> por favor, corregir...
@endcomponent
```

### Breadcrumb

```php
@component('template::breadcrumb', ['breadcrumb' => ['/module' => 'Módulo', '/sub-module' => 'SubMódulo']])
	Clientes
@endcomponent
```

### Btn Dropdown

```php
@component('template::btn-dropdown', ['links' => ['/action-1' => 'Acción 1', '/action-2' => 'Acción 2']])
	Usuarios
@endcomponent
```

### Btn Group

```php
@component('template::btn-group', ['buttons' => ['/btn-1' => 'Btn 1', '/btn-2' => 'Btn 2']]) @endcomponent
```

```php
@component('template::btn-group', [
	'buttons' => ['/btn-1' => 'Btn 1', '/btn-2' => 'Btn 2'],
	'color'   => 'primary',
	'size'    => 'md'
]) @endcomponent    
```

### Link Icon

```php
@component('template::link-icon', ['route' => '#', 'icon' => 'plus-square'])
	Crear
@endcomponent
```

```php
@component('template::link-icon', ['route' => '#', 'icon' => 'plus-square', 'color' => 'primary'])
	Crear
@endcomponent
```

### Link

```php
@component('template::link', ['route' => '#'])
	Crear
@endcomponent
```

```php
@component('template::link', ['route' => '#', 'color' => 'primary'])
	Crear
@endcomponent    
```

# Elemento de Formularios (form)

### Button

```php
{{ Form::rButton() }}
```

Parámetros `['label', 'color', []]`

### Checkbox

```php
{{ Form::rCheckbox('courses', 'php', 'PHP') }}
{{ Form::rCheckbox('courses', 'laravel', 'Laravel') }}
```

Parámetros `['name', 'value', []]`

### CKEditor

```php
{{ Form::rCKEditor() }}
```

Parámetros `['name', 'label']`

### Email

```php
{{ Form::rEmail() }}
```

Parámetros `['label', []]`

### Hidden

```php
{{ Form::rHidden('id', 1) }}
```

Parámetros `['name', 'value']`
...

### Image

```php
{{ Form::rImage() }}
```

Parámetros `['name', 'label', []]`

### Password

```php
{{ Form::rPassword() }}
```

Parámetros `['label']`

### Radio

```php
{{ Form::rRadio(['1' => 'PHP', '2' => 'Laravel']) }}
```

Parámetros `['items', 'name', 'label']`

### Submit

```php
{{ Form::rSubmit() }}
```

Parámetros `['label' 'color', []]`

### Text

```php
{{ Form::rText('name', 'Nombre *') }}
```

Parámetros `['name', 'label', []]`

### Textarea

```php
{{ Form::rTextarea('body', 'Contenido *') }}
```

Parámetros `['name', 'label', []]`