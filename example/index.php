<?php

use NetherMC\ApiServer\Route;

require dirname(__DIR__).'/vendor/autoload.php';

Route::get('/hello', require __DIR__.'/routes/hello.php');