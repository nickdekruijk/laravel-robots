<?php

use NickDeKruijk\LaravelRobots\Robots;

Route::get('robots.txt', [Robots::class, 'show']);
