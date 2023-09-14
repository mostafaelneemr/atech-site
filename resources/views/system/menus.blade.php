@php

    $menu['Dashboard'] = [
        'url'=> route('system.dashboard'),
        'icon'=>'<i class="fa fas fa-th"></i>',
        'text'=>__('Dashboard'),
    ];

    $menu['Home']= [
        'permission'=>[ 'home-slider.index' , 'testimonials.index', 'brands.index' ],
        'icon'=>'<i class="fa fa-users"></i>',
        'text'=> __('Home'),
          'sub'=>[
                [
                    'permission'=> 'home-slider.index',
                    'url'=> route('home-slider.index'),
                    'text'=> __('Home-slider')
                ],
                [
                    'permission'=> 'testimonials.index',
                    'url'=> route('testimonials.index'),
                    'text'=> __('Testimonials')
                ],
                [
                    'permission'=> 'brands.index',
                    'url'=> route('brands.index'),
                    'text'=> __('Brands')
                ],
                [
                    'permission'=> 'certificates.index',
                    'url'=> route('certificates.index'),
                    'text'=> __('Certificates')
                ],
                [
                    'permission'=> 'clients.index',
                    'url'=> route('clients.index'),
                    'text'=> __('Clients')
                ],
                [
                    'permission'=> 'blogs.index',
                    'url'=> route('blogs.index'),
                    'text'=> __('Blogs')
                ],
                [
                    'permission'=> 'projects.index',
                    'url'=> route('projects.index'),
                    'text'=> __('Projects')
                ],
                [
                    'permission'=> 'our-activities.index',
                    'url'=> route('our-activities.index'),
                    'text'=> __('Our-Activities')
                ],
            ]
    ];


    $menu['Staff']= [
        'permission'=>[ 'system.staff.index' , 'system.staff.show', 'system.staff.create' ],
        'icon'=>'<i class="fa fa-users"></i>',
        'text'=> __('Staff'),
          'sub'=>[
              [
                 'permission'=> 'system.staff.index',
                 'url'=> route('system.staff.index'),
                 'text'=> __('View')
              ],
              [
                 'permission'=> 'system.staff.create',
                 'url'=> route('system.staff.create'),
                 'text'=> __('Create')
              ]
            ]
    ];


    $menu['permission group']= [
        'permission'=>[ 'system.permission-group.index' , 'system.permission-group.show', 'system.permission-group.create'],
        'icon'=>'<i class="fa fa-users"></i>',
        'text'=> __('Permission Group'),
            'sub'=>[
                [
                   'permission'=> 'system.permission-group.index',
                   'url'=> route('system.permission-group.index'),
                   'text'=> __('View')
                ],
                [
                    'permission'=> 'system.permission-group.create',
                    'url'=> route('system.permission-group.create'),
                    'text'=> __('Create')
                ]

            ]
    ];


  $menu['Settings'] = [
        'permission'=> ['system.setting.index','system.setting.update'],
        'url'=> route('system.setting.index'),
        'icon'=>'<i class="fa fas fa-th"></i>',
        'text'=>__('Settings'),
    ];


//     $menu['ActivityLog'] = [
//         'permission'=> ['system.activity-log.index'],
//         'url'=> route('system.activity-log.index'),
//         'icon'=>'<i class="fa fa-cog"></i>',
//         'text'=> __('Activity Log'),
//     ];

//    $menu['AuthSessions'] = [
//         'permission'=> ['system.staff.auth-sessions'],
//         'url'=> route('system.staff.auth-sessions'),
//         'icon'=>'<i class="fa fa-cog"></i>',
//         'text'=> __('Auth Sessions'),
//     ];


@endphp

@foreach($menu as $onemenu)
    {!! generateMenu($onemenu) !!}
@endforeach
