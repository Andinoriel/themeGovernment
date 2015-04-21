<?php

$configMain =
'<?php
/**
 *  MODX Configuration file
 */
$database_type = \'mysql\';
$database_server = \'localhost\';
$database_user = \'root\';
$database_password = \'\';
$database_connection_charset = \'utf8\';
$dbase = \'clients_...\';
$table_prefix = \'modx_\';
$database_dsn = \'mysql:host=localhost;dbname=clients_...s;charset=utf8\';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1409044918;

$site_id = \'modx53fc51b651f112.79087837\';
$site_sessionname = \'SN53fc519e40eb6\';
$https_port = \'443\';
$uuid = \'38780285-3c33-4f81-9d01-9d2be59b63e7\';

if (!defined(\'MODX_CORE_PATH\')) {
    $modx_core_path= \'F:/WebServers/domains/.../core/\';
    define(\'MODX_CORE_PATH\', $modx_core_path);
}
if (!defined(\'MODX_PROCESSORS_PATH\')) {
    $modx_processors_path= \'F:/WebServers/domains/.../core/model/modx/processors/\';
    define(\'MODX_PROCESSORS_PATH\', $modx_processors_path);
}
if (!defined(\'MODX_CONNECTORS_PATH\')) {
    $modx_connectors_path= \'F:/WebServers/domains/.../connectors/\';
    $modx_connectors_url= \'/connectors/\';
    define(\'MODX_CONNECTORS_PATH\', $modx_connectors_path);
    define(\'MODX_CONNECTORS_URL\', $modx_connectors_url);
}
if (!defined(\'MODX_MANAGER_PATH\')) {
    $modx_manager_path= \'F:/WebServers/domains/.../manager/\';
    $modx_manager_url= \'/manager/\';
    define(\'MODX_MANAGER_PATH\', $modx_manager_path);
    define(\'MODX_MANAGER_URL\', $modx_manager_url);
}
if (!defined(\'MODX_BASE_PATH\')) {
    $modx_base_path= \'F:/WebServers/domains/.../\';
    $modx_base_url= \'/\';
    define(\'MODX_BASE_PATH\', $modx_base_path);
    define(\'MODX_BASE_URL\', $modx_base_url);
}
if(defined(\'PHP_SAPI\') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset ($_SERVER[\'HTTPS\']) && strtolower($_SERVER[\'HTTPS\']) == \'on\') || $_SERVER[\'SERVER_PORT\'] == $https_port);
}
if (!defined(\'MODX_URL_SCHEME\')) {
    $url_scheme=  $isSecureRequest ? \'https://\' : \'http://\';
    define(\'MODX_URL_SCHEME\', $url_scheme);
}
if (!defined(\'MODX_HTTP_HOST\')) {
    if(defined(\'PHP_SAPI\') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host=\'...\';
        define(\'MODX_HTTP_HOST\', $http_host);
    } else {
        $http_host= array_key_exists(\'HTTP_HOST\', $_SERVER) ? $_SERVER[\'HTTP_HOST\'] : \'...\';
        if ($_SERVER[\'SERVER_PORT\'] != 80) {
            $http_host= str_replace(\':\' . $_SERVER[\'SERVER_PORT\'], \'\', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= ($_SERVER[\'SERVER_PORT\'] == 80 || $isSecureRequest) ? \'\' : \':\' . $_SERVER[\'SERVER_PORT\'];
        define(\'MODX_HTTP_HOST\', $http_host);
    }
}
if (!defined(\'MODX_SITE_URL\')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define(\'MODX_SITE_URL\', $site_url);
}
if (!defined(\'MODX_ASSETS_PATH\')) {
    $modx_assets_path= \'F:/WebServers/domains/.../assets/\';
    $modx_assets_url= \'/assets/\';
    define(\'MODX_ASSETS_PATH\', $modx_assets_path);
    define(\'MODX_ASSETS_URL\', $modx_assets_url);
}
if (!defined(\'MODX_LOG_LEVEL_FATAL\')) {
    define(\'MODX_LOG_LEVEL_FATAL\', 0);
    define(\'MODX_LOG_LEVEL_ERROR\', 1);
    define(\'MODX_LOG_LEVEL_WARN\', 2);
    define(\'MODX_LOG_LEVEL_INFO\', 3);
    define(\'MODX_LOG_LEVEL_DEBUG\', 4);
}
if (!defined(\'MODX_CACHE_DISABLED\')) {
    $modx_cache_disabled= false;
    define(\'MODX_CACHE_DISABLED\', $modx_cache_disabled);
}

';
$configOther = '
<?php
define(\'MODX_CORE_PATH\', \'F:/WebServers/domains/.../core/\');
define(\'MODX_CONFIG_KEY\', \'config\');
?>';

if ($object->xpdo) {
	/* @var modX $modx */
	$modx =& $object->xpdo;

	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
            if(!file_exists(MODX_CORE_PATH.'config/config.inc.sample.php')) {
                file_put_contents(MODX_CORE_PATH.'config/config.inc.sample.php', $configMain);
            }

            if(!file_exists(MODX_BASE_PATH.'config.core.sample.php')) {
                file_put_contents(MODX_BASE_PATH.'config.core.sample.php', $configOther);
            }

            if(!file_exists(MODX_MANAGER_PATH.'config.core.sample.php')) {
                file_put_contents(MODX_MANAGER_PATH.'config.core.sample.php', $configOther);
            }

            if(!file_exists(MODX_CONNECTORS_PATH.'config.core.sample.php')) {
                file_put_contents(MODX_CONNECTORS_PATH.'config.core.sample.php', $configOther);
            }

        break;

		case xPDOTransport::ACTION_UNINSTALL:
        break;
	}
}
return true;