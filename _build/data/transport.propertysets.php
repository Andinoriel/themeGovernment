<?php

$propertysets = array();

$tmp = array(
    'mainMenu' => array(
        array(
            'name' => 'level',
            'type' => 'numberfield',
            'value' => '2',
        ),
        array(
            'name' => 'useWeblinkUrl',
            'type' => 'combo-boolean',
            'value' => false,
        )
    ),
);

foreach ($tmp as $k => $v) {
    $propertyset = $modx->newObject('modPropertySet');
    $propertyset->fromArray(array(
        'name' => $k
    ),'',true,true);
    $propertyset->setProperties($v);

    $propertysets[] = $propertyset;
}

unset($tmp);
return $propertysets;