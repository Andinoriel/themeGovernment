<?php

$settings = array();

$tmp = array(
	'ga_tracking_id' => array(
		'xtype' => 'textfield',
		'value' => '',
		'area' => 'themegovernment_main',
	),
    'ga_tracking_name' => array(
        'xtype' => 'textfield',
        'value' => 'auto',
        'area' => 'themegovernment_main',
    ),
    'design_url' => array(
        'xtype' => 'textfield',
        'value' => '{assets_url}'.PKG_NAME_LOWER.'-design/',
        'area' => 'themegovernment_main',
    ),
    'color_scheme' => array(
        'xtype' => 'textfield',
        'value' => 'default',
        'area' => 'themegovernment_main',
    ),

    //subscribe
    'unisender_api_key' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'themegovernment_subscribe',
    ),
    'unisender_list_ids' => array(
        'xtype' => 'textfield',
        'value' => '',
        'area' => 'themegovernment_subscribe',
    ),

    // resources
    'id_ajax_form_contacts' => array(
        'xtype' => 'numberfield',
        'value' => '',
        'area' => 'themegovernment_resources',
    ),
    'id_ajax_form_subscribe' => array(
        'xtype' => 'numberfield',
        'value' => '',
        'area' => 'themegovernment_resources',
    ),
    'id_error_page' => array(
        'xtype' => 'numberfield',
        'value' => '',
        'area' => 'themegovernment_resources',
    ),
    'id_index_page' => array(
        'xtype' => 'numberfield',
        'value' => '',
        'area' => 'themegovernment_resources',
    ),
);

foreach ($tmp as $k => $v) {
	/* @var modSystemSetting $setting */
	$setting = $modx->newObject('modSystemSetting');
	$setting->fromArray(array_merge(
		array(
			'key' => 'themegovernment.'.$k,
			'namespace' => PKG_NAME_LOWER,
		), $v
	),'',true,true);

	$settings[] = $setting;
}

unset($tmp);
return $settings;
