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
        'string' => ['block_title'],
        'groups' => [
            'dom_flat' => [
                'string' => ['dom_flat_name']
            ],
            'layout' => [
                'string' => ['layout_name'],
                'image' => ['layout_scheme'],
                'float' => ['area'],
                'dom_flat' => ['superior']
            ]
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
