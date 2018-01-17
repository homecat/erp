<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:45
 */
namespace System;
use Zend\Router\Http\Segment;


return [
    'router' =>[
        'routes' => [
            'system' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/system[/:action]',
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],

];