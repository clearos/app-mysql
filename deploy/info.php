<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'mysql';
$app['version'] = '1.4.14';
$app['release'] = '1';
$app['vendor'] = 'ClearFoundation';
$app['packager'] = 'ClearFoundation';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('mysql_app_description');
$app['tooltip'] = lang('mysql_app_tooltip');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('mysql_app_name');
$app['category'] = lang('base_category_server');
$app['subcategory'] = lang('base_subcategory_database');

/////////////////////////////////////////////////////////////////////////////
// Controllers
/////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['core_requires'] = array(
    'app-base-core >= 1:1.2.6',
    'app-network-core', 
    'app-storage-core >= 1:1.4.7',
    'mysql-server >= 5.1.52',
    'phpMyAdmin >= 3.4.7'
);

$app['core_file_manifest'] = array( 
    'mysql_default.conf' => array ( 'target' => '/etc/clearos/storage.d/mysql_default.conf' ),
    'mysqld.php'=> array( 'target' => '/var/clearos/base/daemon/mysqld.php' ),
);

$app['delete_dependency'] = array(
    'app-mysql-core',
    'mysql-server',
    'phpMyAdmin'
);
