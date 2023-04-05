<?php

use NickDeKruijk\LaravelRobots\Robots;

// Add robots.txt route
Route::get('robots.txt', [Robots::class, 'show']);
