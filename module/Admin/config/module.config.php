<?php
namespace Admin;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\LoginController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'admin' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/admin',
                    'defaults' => [
                        'controller'    => Controller\LoginController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
		'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
			'layout/login'           => __DIR__ . '/../view/layout/login.phtml',
            'admin/login/index' => __DIR__ . '/../view/admin/login/index.phtml',
        ],
        'template_path_stack' => [
            'Admin' => __DIR__ . '/../view',
			
        ],
    ],
];
