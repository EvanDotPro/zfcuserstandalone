<?php
return array(
    'di' => array(
        'instance' => array(
            'alias' => array(
                'masterdb_pdo' => 'PDO',
            ),
            'masterdb_pdo' => array(
                'parameters' => array(
                    'dsn'            => 'sqlite:' . getcwd() . '/data/users.db',
                    'username'       => '',
                    'passwd'         => '',
                    'driver_options' => array(),
                ),
            ),
            'Zend\Db\Adapter\Adapter' => array(
                'parameters' => array(
                    'driver' => 'Zend\Db\Adapter\Driver\Pdo\Pdo',
                ),
            ),
            'Zend\Db\Adapter\Driver\Pdo\Pdo' => array(
                'parameters' => array(
                    'connection' => 'Zend\Db\Adapter\Driver\Pdo\Connection',
                ),
            ),
            'Zend\Db\Adapter\Driver\Pdo\Connection' => array(
                'parameters' => array(
                    'resource' => 'masterdb_pdo',
                ),
            ),
        ),
    ),
);
