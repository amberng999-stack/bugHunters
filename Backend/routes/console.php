<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Keep hunting bugs!');
})->purpose('Display an inspiring quote');
