# Laravel Robots
Dynamic robots.txt files for Laravel projects

## Installation
To install the package use

`composer require nickdekruijk/laravel-robots`

Remove your current `robots.txt` file from your public folder.

## Configuration
If you don't like the default configuration options publish the config file and change the `robots.php` file in your Laravel `app/config` folder.

`php artisan vendor:publish --tag=config --provider="NickDeKruijk\LaravelRobots\ServiceProvider"`

## License
Settings is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
