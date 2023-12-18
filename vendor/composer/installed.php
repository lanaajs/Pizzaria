<?php return array(
    'root' => array(
        'name' => 'onepizza/onepizza',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '5947a26dfc2fd297260198458db1b58327e5bfb0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'nikic/fast-route' => array(
            'pretty_version' => 'v1.3.0',
            'version' => '1.3.0.0',
            'reference' => '5947a26dfc2fd297260198458db1b58327e5bfb0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'onepizza/onepizza' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '181d480e08d9476e61381e04a71b34dc0432e812',
            'type' => 'project',
            'install_path' => __DIR__ . '/../nikic/fast-route',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
