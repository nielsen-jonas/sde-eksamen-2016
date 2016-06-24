<?php

// Requests are mapped to scripts
const ROUTE = [
    'default'                       => 'page/default',
    '/'                             => 'page/index',
    '/nyheder'                      => 'page/news',
    '/arrangementer'                => 'page/arrangements',
    '/galleri'                      => 'page/gallery',
    '/baadpark'                     => 'page/boatpark',
    '/bliv-medlem'                  => 'page/membership',
    '/min-side'                     => 'page/my_page',
    '/kontakt'                      => 'page/contact',
    '/admin/master'                 => 'page/admin/master',
    '/admin/instruktoer'            => 'page/admin/instructor',
    '/admin/medlem'                 => 'page/admin/member',
    '/action/logout'                => 'action/logout',
    '/admin/master/instructor/{id}' => ['page/admin/master_edit_instructor', [
        'id' => '[0-9]+'
    ]],
    '/update/instructor/{id}'       => ['action/update_instructor', [
        'id' => '[0-9]+'
    ]],
    '/delete/instructor/{id}'       => ['action/delete_instructor', [
        'id' => '[0-9]+'
    ]],
    '/test/{type}/{id}'             => ['test', [
        'type' => '[a-z]+',
        'id' => '[0-9]+'
    ]],
];

// Script directory used when calling scripts (relative path from the .protected root)
const SCRIPT_DIRECTORY = 'usr/script/';