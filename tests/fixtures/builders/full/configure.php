<?php


use ByTIC\SeoMeta\MetaManager;

$manager = new MetaManager();
$manager->setTitleBase('base');
$manager->appendTitle('page');

$manager->author('GS');
$manager->description('GS');

$manager->og('title', 'The title');
$manager->og('type', 'website');
$manager->og('url', 'https://gabrielsolomon.ro');
$manager->og('image', 'https://gabrielsolomon.ro/logo.jpg');

$manager->twitter('card', 'summary');
$manager->twitter('site', '@solomongaby');
return $manager;