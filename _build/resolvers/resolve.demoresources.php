<?php

/*
* Create documents
*/
function createDocsDemo(&$modx, $context_key, $node, $doc = null){
    $base_params = array(
        'update'        => true,
    );

    if(isset($node['childs'])){
        $menuIndex = 0;
        foreach($node['childs'] as $resource => $options){
            $classKey = 'modResource';
            $keyInName = explode(':',$resource);
            if(isset($keyInName[1])) {
                $classKey = $keyInName[1];
            }

            $menuIndex++;
            $pid = ($doc ? $doc->id : 0);
            $params = array_merge($base_params, $options);
            $params['parent']    =  $pid;
            $modx->log(modX::LOG_LEVEL_INFO,'Start create resource '.$params['pagetitle'].'.');
            if(!$doc__ = $modx->getObject($classKey,
                $params['parentCheck'] ?
                    array(
                        'context_key' => $context_key,
                        'alias'     =>  $params['alias'],
                    )
                :
                    array(
                        'context_key' => $context_key,
                        'parent'    =>  $pid,
                        'alias'     =>  $params['alias'],
                    )
            )){
                $params['menuindex'] = $menuIndex;
                $doc__ = $modx->newObject($classKey);
                $doc__->fromArray($params,'',true,true);
                $doc__->cleanAlias($params['alias']);
                if(!$doc__->save()){
                    $modx->log(xPDO::LOG_LEVEL_ERROR, "Can not save {$params['pagetitle']} document");
                } else {
                    $modx->log(modX::LOG_LEVEL_INFO,'Create resource '.$params['pagetitle'].'.');
                }
            }
            else if($params['update'] === true){
                $doc__->fromArray($params);
                if(!$doc__->save()){
                    $modx->log(xPDO::LOG_LEVEL_ERROR, "Can not update {$params['pagetitle']} document");
                } else {
                    $modx->log(modX::LOG_LEVEL_INFO,'Update resource '.$params['pagetitle'].'.');
                }
            }
            if(isset($params['group']) && !empty($params['group'])) {
                $doc__->joinGroup($params['group']);
                $modx->log(modX::LOG_LEVEL_INFO,'Join resource '.$params['pagetitle'].' to group '.$params['group'].'.');
            }

            if(isset($params['tvs']) && !empty($params['tvs'])) {
                foreach($params['tvs'] as $tvName => $value) {
                    $tv = $modx->getObject('modTemplateVar',array('name' => $tvName));
                    if (empty($tv)) {
                        $modx->log(xPDO::LOG_LEVEL_ERROR,'Could not find TV: '.$tvName.' to associate to Templates.');
                        continue;
                    }

                    $templateVarResource = $modx->getObject('modTemplateVarResource',array(
                        'tmplvarid' => $tv->get('id'),
                        'contentid' => $doc__->get('id'),
                    ));
                    if (!$templateVarResource) {
                        $templateVarResource = $modx->newObject('modTemplateVarResource');
                        $templateVarResource->fromArray(array(
                            'tmplvarid' => $tv->get('id'),
                            'contentid' => $doc__->get('id'),
                            'value' => $value,
                        ),'',true,true);

                        if ($templateVarResource->save() == false) {
                            $modx->log(xPDO::LOG_LEVEL_ERROR,'An unknown error occurred while trying to associate the TV '.$tvName.' to the Resource '.$doc__->get('id'));
                        }
                    }
                }
            }

            createDocsDemo($modx, $context_key, $options, $doc__);
        }
    }
}

/*
 * Content
 */

function getIntroDemo($content){
    $intro = substr(strip_tags($content),0, 200);
    return $intro;
}



if ($object && $object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;

            $options['demo_data'] = 1;
            if($options['demo_data']) {
                $modx->log(modX::LOG_LEVEL_INFO,'Setup demo resources');
                /*
                 * search templates
                 */

                $templateNames = array(
                    'index',
//                    'eventsList',
//                    'eventsListTickets',
//                    'eventsItem',
//                    'galleryList',
//                    'galleryBigList',
//                    'galleryItem',
//                    'blogList',
//                    'blogListTile',
//                    'blogItem',
//                    'blogItemWithoutImage',
//                    'blogItemAside',
//                    'blogItemAsideWithoutImage',
//                    'partners',
//                    'text',
//                    'textAside',
//                    'textAsideWithImage',
//                    'textAsideRight',
//                    'textAsideRightWithImage',
//                    'textWithImage',
//                    'contacts',
                );
                $templateVarPrefix = 'tpl_';
                foreach($templateNames as $templateName){
                    $varName = $templateVarPrefix.$templateName;
                    $modx->log(modX::LOG_LEVEL_INFO,'Find template '.$templateName);
                    if(!$$varName  = $modx->getObject('modTemplate', array('templatename'  => $templateName)   ) ){
                        $modx->log(xPDO::LOG_LEVEL_ERROR, "Could not get Template with name '{$templateName}'");
                        continue;
                    }
                }

                $resources = array(
                    'childs' => array(
                        'home' => array(
                            'class_key' => 'modWebLink',
                            'template' => 0,
                            'pagetitle' => 'Home',
                            'longtitle' => '',
                            'description' => '',
                            'introtext' => '',
                            'alias' => 'indexlist',
                            'uri' => 'indexlist',
                            'link_attributes' => '',
                            'content' => $modx->getObject('modResource', array('alias' => 'index','context_key' => 'web',))->get('id'),
                            'isfolder' => true,
                            'published' => true,
                            'publishedon' => time(),
                            'hidemenu' => false,
                            'cacheable' => true,
                            'searchable' => true,
                            'richtext' => true,
                            'context_key' => 'web',
                            'menutitle' => '',
                            'childs' => array(
                                'Home ver.1' => array(
                                    'parentCheck' => true,
                                    'template' => $tpl_index->get('id'),
                                    'pagetitle' => 'Home ver.1',
                                    'longtitle' => '',
                                    'description' => '',
                                    'introtext' => '',
                                    'alias' => 'index',
                                    'uri' => 'indexlist/index',
                                    'link_attributes' => '',
                                    'content' => '',
                                    'isfolder' => false,
                                    'published' => true,
                                    'publishedon' => time(),
                                    'hidemenu' => false,
                                    'cacheable' => true,
                                    'searchable' => true,
                                    'richtext' => true,
                                    'uri_override' => true,
                                    'context_key' => 'web',
                                    'menutitle' => '',
                                ),

                            )
                        ),
                    )
                );
                createDocsDemo($modx, 'web', $resources, null);
                $modx->reloadContext('web');
                break;
            }

    }
}
return true;