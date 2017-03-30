<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */


use Zend\Config\Reader\Ini as ConfigReader;
use Zend\Config\Config;

$configReader = new ConfigReader();
$gloablConfig = $configReader->fromFile(getcwd() . "/../settings.ini");
$gconf = new Config($gloablConfig, true);
$env = $gconf->environment->current;


return array(
    'db' => array(
        'driver'    => 'Pdo_Pgsql',
        'host'  => $gconf->$env->database->hostname,
    	'username'  => $gconf->$env->database->username,
        'password'  => $gconf->$env->database->password,
    	'database'  => $gconf->$env->database->database,
    	'charset' => 'UTF8',

    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter'
            => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
    'schema'    => $gconf->$env->database->schema,
    'session' => array (
        'config' => array (
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array (
                'name' => $gconf->$env->session->handlename,
            )
        ),
        'save_handler' => 'SessionSaveHandler',
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
        'validators' => array (
            array (
                'Zend\Session\Validator\RemoteAddr',
                'Zend\Session\Validator\HttpUserAgent'
            )
        )
    ),
    'sessionNameHandle' => 'ESU-NSAP-Mike-Dev',
    'mail' => array(
        'name' => 'default',
        'host' => $gconf->$env->mail->host,
        'port'=> $gconf->$env->mail->port,
    ),
    'mailer' => array(
        'defaultMailerFrom' => array(
            'email' => $gconf->$env->mailer->default->from,
            'name'  => $gconf->$env->mailer->default->name,
        ),
        'debug' => array(
            'enabled'       => $gconf->$env->mailer->debug->enabled,
            'email'    => $gconf->$env->mailer->debug->email,
        )
    ),
    'logger' => array(
        'email' => $gconf->$env->logger->email,
        'email-level' => $gconf->$env->logger->email_level,
        'min-level'	=> $gconf->$env->logger->min_level,
    ),
	'edfi' => array(
		'host' 			=> $gconf->$env->edfi->host,
		'oauthurl' 		=> $gconf->$env->edfi->oauthurl,
	),

	'adminLoginConnectorid' => 111,
	'navigation' => array(
		'default' => array(
			array(
				'label' => 'Home',
				'route' => 'application',
				'permission' => 'accessPage-ApplicationControllerIndex-index',

			),
			array(
				'label' => 'Login',
				'route' => 'application/default',
				'params' => array(
					'controller' => 'Login',
					'action' => 'index'
				),
				'permission' => 'accessPage-ApplicationControllerLogin-index',
			),

			array(
				'label' => 'Claim Account',
				'route' => 'application/default',
				'params' => array(
					'controller' => 'ClaimAccount',
					'action' => 'select-connector'
				),
				'permission' => 'accessPage-ApplicationControllerClaimAccount-claim-account',
			),
			array(
				'label' => 'Reset Password',
				'route' => 'application/default',
				'params' => array(
					'controller' => 'Index',
					'action' => 'reset-password'
				),
				'permission' => 'accessPage-ApplicationControllerIndex-reset-password',
			),
			array(
				'label' => 'Admin',
				'route' => 'admin',
				'permission' => 'accessPage-AdminControllerAdmin-index',
				'pages' => array(
					array(
						'label' => 'Admin Home',
						'route' => 'admin/default',
						'params' => array(
							'controller' => 'admin',
							'action' => 'index'
						)
					),
					array(
						'label' => 'Add Connector',
						'route' => 'admin/default',
						'permission' => 'accessPage-AdminControllerAdmin-index',
						'params' => array(
							'controller' => 'connector',
							'action' => 'select-connector'
						)
					),
					array(
						'label' => 'Manage Claim Account Questions',
						'route' => 'admin/default',
						'params' => array(
							'controller' => 'questions',
							'action' => 'select-connector'
						)
					),
					array(
						'label' => 'Manage EdFi Definitions',
						'route' => 'admin/default',
						'params' => array(
							'controller' => 'ed-fi-entry',
							'action' => 'index'
						)
					),

				),
			),
			array(
				'label' => 'Super Admin',
				'route' => 'admin/default',
				'permission' => 'accessPage-AdminControllerUsers-index',
				'params' => array(
					'controller' => 'users',
					'action' => 'index'
				)
			),
			array(
				'label' => 'Logout',
				'route' => 'application/default',
				'params' => array(
					'controller' => 'Login',
					'action' => 'logout'
				),
				'class' => 'float-right',
				'permission' => 'accessPage-ApplicationControllerIndex-index',
			),
		),
	),
	'service_manager' => array(
		'factories' => array(
			'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
		),
	),


);
