<?php

namespace NickDeKruijk\LaravelRobots;

class Robots
{
    /**
     * Return a robots.txt file based on the current environment.
     *
     * @return void
     */
    public function show()
    {
        $defaults = config('robots.defaults');
        $env = config('app.env');
        if (isset($defaults[$env])) {
            $robots = $defaults[$env];
        } else {
            $robots = $defaults[null];
        }
        return response($robots, 200)->header('Content-Type', 'text/plain');
    }
}
