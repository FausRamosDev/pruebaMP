<?php return array(
    'root' => array(
        'name' => 'admin/prueba-mp',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '84b81054d351cff2dd68ed068812b937f4e212c7',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'admin/prueba-mp' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '84b81054d351cff2dd68ed068812b937f4e212c7',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'mercadopago/dx-php' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'b03c3c789c7d4fedfcf7d54cf57993e77c95aabb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../mercadopago/dx-php',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
