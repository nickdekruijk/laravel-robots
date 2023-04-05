<?php

return [

    // Default robots.txt files for different environments
    'defaults' => [
        null => [
            'User-agent: *\nDisallow: /',
        ],
        'production' => [
            'User-agent: *\nDisallow:',
        ],
    ]

];
