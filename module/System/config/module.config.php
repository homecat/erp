<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:45
 */
namespace System;

return [
    'router' => [
        'routes' => [
            'system' => [
                'type'    => 'literal',
                'options' => [
                    'route'    => '/system[/:action]',
                    'defaults' => [
                        'controller' => 'System\Controller\UserController',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];