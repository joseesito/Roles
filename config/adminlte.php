<?php

return [

   //tituloss

    'title' => 'AdminLTE 2',

    'title_prefix' => '',

    'title_postfix' => '',

    //logos

    'logo' => '<b>Sou</b>Thern',

    'logo_mini' => '<b></b>',

    //Skin color

    'skin' => 'blue',

    //Layout

    'layout' => null,

   
    //URLSs
    'collapse_sidebar' => false,

    
    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    //Menu itemss

    'menu' => [
    'MAIN NAVIGATION',
    [
        'text' => 'Roles',
        'url' => 'roles',
    ],
    
    [
        'text' => 'Usuarios',
        'url' => 'users',
    ],
    
    [
        'text' => 'Productos',
        'url' => 'products',
    ],
    [
        'text' => 'Paginas',
        'url' => 'admin/pages',
        'icon' => 'fas fa-fw fa-file'
    ],
    [
        'text' => 'Vistate la web',
        'url' => '/',
        'target' => '_blank'
    ],
    
],

  
    // Menu Filters
    

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    //Plugins

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
