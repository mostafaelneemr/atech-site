<?php

return [

    [
        'name' => __('Staff'),
        'description' => __('Staff Permissions'),
        'permissions' => [
            'view-all-staff'    =>['system.staff.index'],
            'view-one-staff'    =>['system.staff.show'],
            // 'delete-one-staff'  =>['system.staff.destroy'],
            'create-staff'      =>['system.staff.create','system.staff.store'],
            'update-staff'      =>['system.staff.edit','system.staff.update']
        ]
    ],

    [
        'name' => __('Permission Group'),
        'description' => __('Permission Group Permissions'),
        'permissions' => [
            'view-all-permission-group'    =>['system.permission-group.index'],
            'view-one-permission-group'    =>['system.permission-group.show'],
            // 'delete-one-permission-group'  =>['system.permission-group.destroy'],
            'create-permission-group'      =>['system.permission-group.create','system.permission-group.store'],
            'update-permission-group'      =>['system.permission-group.edit','system.permission-group.update']
        ]
    ],

    [
        'name' => __('Setting'),
        'description' => __('Setting Permissions'),
        'permissions' => [
            'manage-setting'    =>['system.setting.index','system.setting.update']
        ]
    ],


    [
        'name' => __('Activity Log'),
        'description' => __('Activity Log'),
        'permissions' => [
            'view-activity-log'=>['system.activity-log.index'],
            'view-one-activity-log'=>['system.activity-log.show'],
        ]
    ],

    // [
    //     'name' => __('Auth Sessions'),
    //     'description' => __('Auth Sessions'),
    //     'permissions' => [
    //         'view-auth-session'=>['system.staff.auth-sessions'],
    //         'delete-auth-session'=>['system.staff.delete-auth-sessions'],
    //     ]
    // ],


    // [
    //     'name' => __('Orders'),
    //     'permissions' => [
    //         'view-all-orders'    =>['system.orders.index'],
    //         'view-one-orders'    =>['system.orders.show'],
    //         'update-orders'      =>['system.orders.edit','system.orders.update']
    //     ]
    // ],

    // [
    //     'name' => __('Payment Methods'),
    //     'description' => __('Payment Methods Permissions'),
    //     'permissions' => [
    //         'view-all-payment-methods'    =>['system.payment-methods.index'],
    //         'show-payment-method-data'    =>['system.payment-methods.show'],
    //         'delete-payment-method'      =>['system.payment-methods.destroy','system.payment-methods.show'],
    //         'create-payment-method'      =>['system.payment-methods.create','system.payment-methods.store'],
    //         'update-payment-method'      =>['system.payment-methods.edit','system.payment-methods.update']
    //     ]
    // ],



];
