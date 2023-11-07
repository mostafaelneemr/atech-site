@php

    $menu['Dashboard'] = [
        'url'=> route('system.dashboard'),
        'icon'=>'<i class="fa fas fa-th"></i>',
        'text'=>__('Dashboard'),
    ];

    $menu['Home']= [
        'permission'=>[ 'home-slider.index' ,'brands.index','our-activities.index','projects.index','certificates.index','testimonials.index','blogs.index','clients.index', ],
        'icon'=>'<i class="fa fa-users"></i>',
        'text'=> __('Home'),
          'sub'=>[
                [
                    'permission'=> 'home-slider.index',
                    'url'=> route('home-slider.index'),
                    'text'=> __('Home-slider')
                ],
                [
                    'permission'=> 'brands.index',
                    'url'=> route('brands.index'),
                    'text'=> __('Brands')
                ],
                [
                    'permission'=> 'our-activities.index',
                    'url'=> route('our-activities.index'),
                    'text'=> __('Our-Activities')
                ],
                [
                    'permission'=> 'projects.index',
                    'url'=> route('projects.index'),
                    'text'=> __('Projects')
                ],
                [
                    'permission'=> 'certificates.index',
                    'url'=> route('certificates.index'),
                    'text'=> __('Certificates')
                ],
                [
                    'permission'=> 'testimonials.index',
                    'url'=> route('testimonials.index'),
                    'text'=> __('Testimonials')
                ],
                [
                    'permission'=> 'blogs.index',
                    'url'=> route('blogs.index'),
                    'text'=> __('Blogs')
                ],
                [
                    'permission'=> 'clients.index',
                    'url'=> route('clients.index'),
                    'text'=> __('Clients')
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
        'icon'=>'<i class="fas fa-tools"></i>',
        'text'=>__('Settings'),
    ];

    $menu['Activation'] = [
        'permission'=> ['activation.index','activation.update'],
        'url'=> route('activation.index'),
        'icon'=>'<i class="fas fa-plus"></i>',
        'text'=>__('Activation'),
    ];

    $menu['SEO Settings'] = [
        'permission'=> ['seosetting.index','seosetting.update'],
        'url'=> route('seosetting.index'),
        'icon'=>'<i class="fas fa-search"></i>',
        'text'=>__('SEO Settings'),
    ];

    $menu['Icons'] = [
        'permission'=> ['fontawsome.index'],
        'url'=> route('fontawsome.index'),
        'icon'=>'<i class="fas fa-icons"></i>',
        'text'=>__('Icons'),
    ];

    $menu['Message'] = [
        // 'permission'=> ['get.messages'],
        'url'=> route('get.messages'),
        'icon'=>'<i class="far fa-envelope"></i>',
        'text'=>__('Messages'),
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
