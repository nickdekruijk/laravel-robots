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
        $robots = config('robots.defaults');
        $env = config('app.env');
        if (isset($robots[$env])) {
            $robots = $robots[$env];
        } else {
            $robots = $robots[null];
        }
        return response(implode("\n", $robots), 200)->header('Content-Type', 'text/plain');
    }
}
