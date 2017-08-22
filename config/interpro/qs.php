<?php

return [

    'main_block' => [
        'string' => ['block_title'],
        'text' => ['text']
    ],

    'about' => [
        'string' => ['block_title'],
        'text' => ['text']
    ],

    'gallery' => [
        'string' => ['block_title'],
        'imageset' => ['slider' => 'slide'],
    ],

    'flats' => [
        'groups' => [
            'dom_flat' => [
                'string' => ['block_title']
            ],
            'layout' => [
                'string' => ['layout_name'],
                'image' => ['layout_scheme'],
                'dom_flat' => ['superior']
            ],
            'area_list' => [
                'float' => ['area'],
                'layout' => ['superior']
            ],
        ]
    ],

    'contacts' => [
        'string' => ['phone', 'mail', 'address']
    ],

    'prices' => [
        'float' => ['dollar', 'meter_cost']
    ],

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],


];
