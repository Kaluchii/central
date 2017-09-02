<?php

return [

    'main_block' => [
        'string' => ['block_title'],
        'text' => ['text']
    ],

    'about' => [
        'string' => ['block_title', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6'],
        'text' => ['text', 'text1', 'text2', 'text3', 'text4', 'text5', 'text6']
    ],

    'gallery' => [
        'string' => ['block_title'],
        'imageset' => ['slider' => 'slide'],
    ],

    'flats' => [
        'string' => ['block_title'],
        'groups' => [
            'dom_flat' => [
                'string' => ['dom_flat_name', 'singularly']
            ],
            'layout' => [
                'image' => ['layout_scheme'],
                'string' => ['info'],
                'float' => ['area', 'meter_cost'],
                'dom_flat' => ['superior']
            ]
        ]
    ],

    'contacts' => [
        'string' => ['block_title', 'phone', 'mail', 'address']
    ],

    'prices' => [
        'float' => ['dollar']
    ],

    'scripts' => [
        'text' => ['before_close', 'after_open', 'before_head_close'],
    ],


];
