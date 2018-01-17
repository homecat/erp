<?php
/**
 * Created by PhpStorm.
 * User: jk
 * Date: 2018/1/17
 * Time: 15:45
 */
namespace System;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'system' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/system',
                    'defaults' => [
                        'controller' => 'UserController',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
/*    'controllers' => [
        'factories' => [
            Controller\UserController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'system' => __DIR__ . '/../view',
        ],
    ],*/
];