<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'ContactRest\Controller\ContactRest' => 'ContactRest\Controller\ContactRestController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'contact-rest' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/contact-rest[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'ContactRest\Controller\ContactRest',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    )
);