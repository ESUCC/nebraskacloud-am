<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\Access' => 'Admin\Controller\AccessController',
            'Admin\Controller\Admin' => 'Admin\Controller\AdminController',
        	'Admin\Controller\Questions' => 'Admin\Controller\QuestionsController',
        	'Admin\Controller\Connector' => 'Admin\Controller\ConnectorController',
        	'Admin\Controller\Users' => 'Admin\Controller\UsersController',
        	'Admin\Controller\Process' => 'Admin\Controller\ProcessController',
            'Admin\Controller\EdFiEntry' => 'Admin\Controller\EdFiEntryController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/admin',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Admin\Controller',
                        'controller'    => 'Admin',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                    'question-admin' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/questions/admin/:connectorid',
                            'constraints' => array(
                                'connectorid' => '[0-9][0-9]*',
                            ),
                            'defaults' => array(
                                'controller' => 'questions',
                                'action'     => 'question-admin',
                            ),
                        ),
                    ),
                	'question-view-add' => array(
                		'type'    => 'Segment',
                		'options' => array(
                			'route'    => '/questions/view-add/:connectorid',
                			'constraints' => array(
                				'connectorid' => '[0-9][0-9]*',
                			),
                			'defaults' => array(
                				'controller' => 'question',
                				'action' => 'view-add',
                			),
                		),
                	),
                ),
            ),
        ),
    ),
	'console' => array(
		'router' => array(
			'routes' => array(
				'init-connector-test-post' => array(
					'options' => array(
						'route'    => 'run run-edfi-sync <edfi-entry-id>',
						'defaults' => array(
							'controller' => 'Admin\Controller\Process',
							'action'     => 'process'
						)
					)
				),
				'start-full-sync' => array(
					'options' => array(
						'route'    => 'run start-full-sync',
						'defaults' => array(
							'controller' => 'Admin\Controller\Process',
							'action'     => 'process'
						)
					)
				)
			)
		)
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Admin' => __DIR__ . '/../view',
        ),
    ),
);
