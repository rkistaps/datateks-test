<?php

// use composer autoloader
require 'vendor/autoload.php';

// create main app
$app = new rkistaps\classes\App;

// define data source interface
$url = 'https://www.serveris.lv/cms/test.json';
$downloader = new rkistaps\classes\JsonDataDownloader($url);

// load data
$app->loadData($downloader);

// define format class
$format = new rkistaps\classes\DefaultXmlFormat;

// define response class
$output = new rkistaps\classes\XmlOutput($format);

// respond
$app->output($output);

