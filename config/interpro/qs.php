<?php

return [

    'main_block' => [
        'string' => ['block_title', 'price_from', 'price_up', 'price_1', 'price_2', 'price_3', 'price_4', 'block_1_title', 'block_1_subtitle', 'block_2_title', 'block_2_subtitle'],
        'text' => ['text']
    ],

    'about' => [
        'string' => ['block_title', 'address', 'title1', 'title2', 'title3', 'title4', 'title5', 'title6'],
        'text' => ['text', 'text1', 'text2', 'text3', 'text4', 'text5', 'text6']
    ],

    'gallery' => [
        'string' => ['block_title'],
        'imageset' => ['slider' => 'slide'],
    ],

    'stages' => [
        'string' => ['block_title'],
        'groups' => [
            'dom_stages' => [
                'string' => ['dom_stages_name'],
                'text' => ['text']
            ],
            'stage_images' => [
                'image' => ['stage_photo'],
                'dom_stages' => ['superior']
            ]
        ]
    ],

    'flats' => [
        'string' => ['block_title', 'discount_text'],
        'groups' => [
            'dom_flat' => [
                'string' => ['dom_flat_name', 'singularly']
            ],
            'layout' => [
                'image' => ['layout_scheme'],
                'string' => ['info'],
                'float' => ['area', 'meter_cost', 'meter_in_tg', 'discount'],
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
