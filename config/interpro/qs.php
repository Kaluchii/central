<?php

return [

    'block_birds' => [
        'string' => [
            'descr'
        ],

        'groups' => [
            'group_bird_type' => [
                'string' => [
                    'descr'
                ],
                'group_bird_class' => [
                    'example'
                ],
            ],
            'group_bird_class' => [
                'string' => [
                    'descr'
                ],
                'image' => [
                    'foto'
                ],
                'group_bird_type' => [
                    'superior'
                ]
            ],
            'group_bird_area' => [
                'group_area' => [
                    'area'
                ],
                'group_bird_type' => [
                    'superior'
                ]
            ]
        ]
    ],

    'block_areas' => [
        'string' => [
            'descr'
        ],

        'groups' => [
            'group_area' => [
                'string' => [
                    'descr'
                ]
            ]
        ]

    ],


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
