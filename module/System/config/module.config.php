<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:45
 */
namespace System;
use Zend\Router\Http\Literal;


return [
    'router' => [
        'routes' => [
            'system' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/system',
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];