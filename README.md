### Laravel Blog

### Model

Passing `-m` when creating a model will create the migration for it

### Controller

Passing `--resource` when creating a controller will scaffold out the CRUD methods

### Routes

You don't have to restart the server when adding routes 😱

### Tinker

Equivalent of Rails console

### Huh? 🤔

Parts of Laravel that throw me

#### Loops

How it works

```php
@foreach($services as $service)
```

How I thought it would work

```php
@foreach($service in $services)
```

#### Arrays

How it works

```php
array(
  'title' => 'Hello',
  'description' => 'This is a web page'
);
```

Isn't this an object?

#### Colons

This will error

```php
$post->save()
```

This will work

```php
$post->save();
```

All because of the `;` which appears to be required for everything

### Questions

**Can you use arrow functions `() =>` instead of having to write `function()` for nameless functions?**

**Should validation happen in the controller? In Rails it's preffered to handle validation logic in the model**

### Tutorial

[Learn Laravel](https://youtu.be/EcYXsp78Xy8?t=5167)
