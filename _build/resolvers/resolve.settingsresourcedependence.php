<?php
if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            $settings = array(
                'themegovernment.id_ajax_form_contacts' => 'formcontacts',
                'themegovernment.id_ajax_form_subscribe' => 'formsubscribe',
                'themegovernment.id_error_page' => '404',
                'themegovernment.id_index_page' => 'index',
            );

            $context_key = 'web';

            if(!$ctx = $modx->getObject('modContext',  $context_key)){
                $modx->log(xPDO::LOG_LEVEL_ERROR, "Context with key {$context_key} not exists");
                return false;
            }
            $ctx->prepare(true);

            foreach ($settings as $k => $v) {
                if(!isset($ctx->config[$k])){
                    if($doc = $modx->getObject('modResource', array(
                        'alias'     => $v,
                        'context_key' => 'web',
                    ))){
                        $setting = $modx->getObject('modSystemSetting', array(
                            'key' => $k,
                        ));
                        $setting->set('value', $doc->get('id'));
                        if ($setting->save() == false) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to update the setting ('.$k.').');
                        } else {
                            $modx->log(modX::LOG_LEVEL_INFO,'Update setting '.$k.'.');
                        }
                    }
                }
            }
        break;
        case xPDOTransport::ACTION_UNINSTALL:
        break;
    }
}

return true;