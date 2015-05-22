<?php
if ($object->xpdo) {
    /* @var modX $modx */
    $modx =& $object->xpdo;
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:

            /* list of tvs and templates for each */
            $categoryId = $modx->getObject('modCategory', array('category'=>'themeGovernment'))->get('id');
            $tvs = array(
                'gallery' => array(
                    'category' => $categoryId,
                    'name' => 'gallery',
                    'caption' => 'Gallery',
                    'description' => '',
                    'type' => 'migx',
                    'display' => 'default',
                    'input_properties' => array(
                        'formtabs' => '[{"caption":"Add on image", "fields": [{"field":"title","caption":"Title","inputTV":"galleryImgTitle"},{"field":"image","caption":"Image","inputTV":"galleryImg"}]}]',
                        'columns' => '[{"header": "Title", "width": "160", "sortable": "true", "dataIndex": "title"},{"header": "Image", "width": "50", "sortable": "false", "dataIndex": "image","renderer": "this.renderImage"}]'
                    )
                ),
                'lineUp' => array(
                    'category' => $categoryId,
                    'name' => 'lineUp',
                    'caption' => 'Line-Up',
                    'description' => '',
                    'type' => 'migx',
                    'display' => 'default',
                    'input_properties' => array(
                        'formtabs' => '[{"caption":"Add on person", "fields": [{"field":"name","caption":"Name","inputTV":"lineUpName"},{"field":"location","caption":"Location","inputTV":"lineUpLocation"}]}]',
                        'columns' => '[{"header": "Name", "width": "140", "sortable": "true", "dataIndex": "name"},{"header": "Location", "width": "70", "sortable": "false", "dataIndex": "location"}]'
                    )
                ),
                'imgg' => array(
                    'category' => $categoryId,
                    'name' => 'imgg',
                    'caption' => 'Preview',
                    'description' => '',
                    'type' => 'image',
                    'display' => 'text',
                    'locked' => 0,
                    'rank' => 0,
                )
            );

            foreach ($tvs as $k => $v) {
                if(!$tv = $modx->getObject('modTemplateVar', array('name'=>$k))) {
                    $tv = $modx->newObject('modTemplateVar');
                }
                $tv->fromArray($v,'',true,true);

                if(!$tv->save()) {
                    $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not create TV '.$k);
                } else {
                    $modx->log(modX::LOG_LEVEL_INFO,'Create TV '.$k.'.');
                }
            }
        break;
        case xPDOTransport::ACTION_UNINSTALL:
        break;
    }
}

return true;