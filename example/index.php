<?php

use NetherMC\ApiServer\CORS;
use NetherMC\ApiServer\Route;

require dirname(__DIR__).'/vendor/autoload.php';

new CORS([
    'enabled' => true
]);

Route::get('/hello', require __DIR__.'/routes/hello.php');