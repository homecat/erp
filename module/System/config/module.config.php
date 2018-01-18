<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:45
 */
namespace System;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'system' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/system[/:action]',
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action'     => 'user',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\UserController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'doctype'             => 'HTML5',
        'template_map' => [
            'layout/layout'   => __DIR__ . '/../view/layout/layout.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/view',
        ],
    ],
];