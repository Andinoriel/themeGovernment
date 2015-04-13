<?php
/**
* Package in subpackages
*
* @package modxss
*/
$subpackages = array(
    'pdotools' => 'pdotools-1.11.1-pl',
    'jevix' => 'jevix-1.2.0-pl2',
    'resizer' => 'resizer-1.0.1-pl',
    'dateago' => 'dateago-1.0.2-pl',
    'lexiconfrontend' => 'lexiconfrontend-1.0.1-beta',
    'molt' => 'molt-1.0.2-beta',
    'pthumb' => 'pthumb-2.3.3-pl',
    'tickets' => 'tickets-1.5.1-pl',
    'migx' => 'migx-2.9.0-pl',
);
$spAttr = array('vehicle_class' => 'xPDOTransportVehicle');

foreach ($subpackages as $name => $signature) {
    $vehicle->resolve('file',array(
        'source' => $sources['subpackages'] . $signature.'.transport.zip',
        'target' => "return MODX_CORE_PATH . 'packages/';",
    ),$spAttr);
}

return true;