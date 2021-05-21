<?php


use ByTIC\SeoMeta\MetaManager;

$manager = new MetaManager();
$manager->setTitleBase('base');
$manager->appendTitle('page');
$manager->author('GS');

return $manager;