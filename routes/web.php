<?php

use Silber\Bouncer\BouncerFacade as Bouncer;

Route::get('/', function () {
    return Bouncer::can('whatever') ? 'yes' : 'nope';
});
