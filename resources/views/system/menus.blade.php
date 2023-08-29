@php

    $menu['Dashboard'] = [
        'url'=> route('system.dashboard'),
        'icon'=>'<i class="fa fas fa-th"></i>',
        'text'=>__('Dashboard'),
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
