<?php

$settings = parseXmlFile(BASE_PATH . 'modules/lisathelmar/settings.xml');
$initPath = DIRNAME(__FILE__) . '/init.php';
if(file_exists($initPath)) {
    require_once $initPath;
}   
