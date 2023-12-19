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
        'name' => __('Home'),
        'description' => __('Home Page Permissions'),
        'permissions' => [
            
            'view-all-slider' =>['home-slider.index'],
            'create-slider' =>['home-slider.create', 'home-slider.store'],
            'Update-and-Delete-slider'  =>['home-slider.edit','home-slider.update', 'home-slider.destroy'],

            'view-all-brands' =>['brands.index'],
            'create-brands' =>['brands.create', 'brands.store'],
            'Update-and-Delete-brands' =>['brands.edit','brands.update', 'brands.destroy'],
            
            'view-all-our-activities' =>['our-activities.index'],
            'create-our-activities' =>['our-activities.create', 'our-activities.store'],
            'Update-and-Delete-our-activities' =>['our-activities.edit','our-activities.update', 'our-activities.destroy'],

            'view-all-projects' =>['projects.index'],
            'create-projects' =>['projects.create', 'projects.store'],
            'Update-and-Delete-projects' =>['projects.edit','projects.update', 'projects.destroy'],

            'view-all-certificates' =>['certificates.index'],
            'create-certificates' =>['certificates.create', 'certificates.store'],
            'Update-and-Delete-certificates' =>['certificates.edit','certificates.update', 'certificates.destroy'],

            'view-all-testimonial' =>['testimonials.index'],
            'create-testimonial' =>['testimonials.create', 'testimonials.store'],
            'Update-and-Delete-testimonial' =>['testimonials.edit','testimonials.update', 'testimonials.destroy'],

            'view-all-teams' =>['teams.index'],
            'create-teams' =>['teams.create', 'teams.store'],
            'Update-and-Delete-teams' =>['teams.edit','teams.update', 'teams.destroy'],

            'view-all-blogs' =>['blogs.index'],
            'create-blogs' =>['blogs.create', 'blogs.store'],
            'Update-and-Delete-blogs' =>['blogs.edit','blogs.update', 'blogs.destroy'],

            'view-all-clients' =>['clients.index'],
            'create-clients' =>['clients.create', 'clients.store'],
            'Update-and-Delete-clients' =>['clients.edit','clients.update', 'clients.destroy'],

            'view-all-careers' =>['careers.index'],
            'create-careers' =>['careers.create', 'careers.store'],
            'Update-and-Delete-careers' =>['careers.edit','careers.update', 'careers.destroy'],


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
        'permissions' => [ 'manage-setting'  =>['system.setting.index','system.setting.update'] ]
    ],

    [
        'name' => __('Activation'),
        'description' => __('Activation Permissions'),
        'permissions' => [ 'manage-activation'  =>['activation.index','activation.update'] ]
    ],

    [
        'name' => __('SEO Setting'),
        'description' => __('SEO Setting Permissions'),
        'permissions' => [ 'manage-seosetting'  =>['seosetting.index','seosetting.update'] ]
    ],

    [
        'name' => __('Icons'),
        'description' => __('Icons Permissions'),
        'permissions' => [ 'fontawsome'  =>['fontawsome.index'] ]
    ],


    // [
    //     'name' => __('Activity Log'),
    //     'description' => __('Activity Log'),
    //     'permissions' => [
    //         'view-activity-log'=>['system.activity-log.index'],
    //         'view-one-activity-log'=>['system.activity-log.show'],
    //     ]
    // ],

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
