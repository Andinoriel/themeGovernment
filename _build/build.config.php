<?php

/* define package */
define('PKG_NAME', 'themeGovernment');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));

define('PKG_VERSION', '1.0.0');
define('PKG_RELEASE', 'pl');
define('PKG_AUTO_INSTALL', false);
define('PKG_NAMESPACE_PATH', '{core_path}components/'.PKG_NAME_LOWER.'/');

/* define paths */
if (isset($_SERVER['MODX_BASE_PATH'])) {
	define('MODX_BASE_PATH', $_SERVER['MODX_BASE_PATH']);
}
elseif (file_exists(dirname(dirname(dirname(__FILE__))) . '/core')) {
	define('MODX_BASE_PATH', dirname(dirname(dirname(__FILE__))) . '/');
}
else {
	define('MODX_BASE_PATH', dirname(dirname(dirname(dirname(__FILE__)))) . '/');
}
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');

/* define urls */
define('MODX_BASE_URL', '/');
define('MODX_CORE_URL', MODX_BASE_URL . 'core/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');

/* define build options */
define('BUILD_MENU_UPDATE', false);
define('BUILD_ACTION_UPDATE', false);
define('BUILD_SETTING_UPDATE', true);
define('BUILD_SUB_CATEGORIES_UPDATE', true);
define('BUILD_CHUNK_UPDATE', true);
define('BUILD_TEMPLATE_UPDATE', true);
define('BUILD_PROPERTY_SETS_UPDATE', true);
define('BUILD_TEMPLATE_VARS_UPDATE', true);

define('BUILD_SNIPPET_UPDATE', true);
define('BUILD_PLUGIN_UPDATE', true);
//define('BUILD_EVENT_UPDATE', true);
define('BUILD_POLICY_UPDATE', true);
//define('BUILD_POLICY_TEMPLATE_UPDATE', true);
//define('BUILD_PERMISSION_UPDATE', true);
define('BUILD_RESOURCE_GROUP_UPDATE', true);
define('BUILD_USER_GROUP_ROLES_UPDATE', true);
define('BUILD_USER_GROUP_UPDATE', true);
define('BUILD_ROLE_UPDATE', true);

define('BUILD_CHUNK_STATIC', true);
define('BUILD_SNIPPET_STATIC', true);
define('BUILD_PLUGIN_STATIC', true);
define('BUILD_TEMPLATE_STATIC', true);

$BUILD_RESOLVERS = array(
    'setup',//сборка субпакетов

    'contenttype',//чпу - убираем окончания у страниц
    'settings',//настройки ЧПУ, phpthumbof, tickets
    'htaccess',//генерация htaccess
    'sources',//создание источников файлов

    'tv.create',//создание tv-к
    'tv.template',//назначение tv-к темплейтам
    'resources',//создание ресурсов с содержимым
    'contextsettings',//настройки контекстов 404 и индекс
    'settingsresourcedependence',//запись в системные переменные id ресурсов
    'propertysets',//сопоставление наборов параметров сниппетам.. сами наборы заполняются в транспорте
    'plugins',//регистрация плагинов из lexiconffr

    'usergroups',//права, группы и прочее
    'users',//создание менеджера

    //'demoresources', //создание деморесурсов


);