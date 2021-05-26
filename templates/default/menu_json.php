<?php
$menu = [
    [
        [
            'name' => 'Link',
            'link' => 'link',
            'icon' => 'home',
            'sub' => ''
        ],
        [
            'name' => 'Sub Links',
            'link' => '#',
            'icon' => 'wallet',
            'sub' => [ 'subs' => [
                    [
                        'name' => 'Link 1',
                        'link' => 'link1',
                        'icon' => 'home',
                    ],
                    [
                        'name' => 'Link 2',
                        'link' => 'link2',
                        'icon' => 'home',
                    ]
                ]
            ]
        ],
    ],
    //[]
];
echo json_encode($menu);
