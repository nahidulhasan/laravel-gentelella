<?php

return [
    'users' => [
        'model' => \App\Models\User::class,
        'table' => 'users',
        'role_column'   => 'type'
    ],

    'super_user'    =>  'super_admin',

    'abilities'   => [
        "user" => ['create', 'update'=>'user.update', 'delete', 'view'],
        "activity-log"   => ['view'],
        "role" => ['create', 'update', 'view','delete'],
    ],


    'policies'  => [
        'module' => [
            'update'    => '\App\Permit\Policies\PostPolicy@update',
        ],
    ],



    'roles' => [
        'super_admin' => [
            'user.*',
            'activity-log.*',
            'role.*',
        ],
        'user' => [

        ],
        'deliverer' => [

        ],
        'admin' => [

        ],
        'merchant_global' => [

        ],
        'merchant_support' => [

        ],
        'merchant_account_manager' => [

        ],

        'hub_manager' => [

        ],
        'shift_in_charge_inbound' => [

        ],
        'shift_in_charge_outbound' => [

        ]

    ]
];

