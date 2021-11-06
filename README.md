# PHP API Server

This package is used to create an API in PHP, easily.

## Usage

### Install the library

```shell
composer require nethermc/api-server
```

### Require Composer autoloader

```php
require __DIR__.'/vendor/autoload.php';
```

## Docs

### Create routes

```php
use NetherMC\ApiServer\Route;

Route::get('/hello', function() {
    return ['hello' => 'world'];
});

// You can use imports too!
Route::get('/hello', require __DIR__.'/routes/hello.php');
```

If we go to `<server-url>/hello`, the server returns JSON, using the [`json_encode`](https://php.net/manual/en/function.json-encode.php) PHP function:
```json
{"hello":"world"}
```

> If you put JSON, the `Content-Type` header is set as `application/json`.