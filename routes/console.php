<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

/* Artisan::command('newtodos {n}', function (string $n) {
    $name = $this->ask('What is your name?');
    $this->info("Created {$n}!");

}); */

Artisan::command('clearall', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    $this->info('Cleared!');
})->purpose('Clear all caches');

