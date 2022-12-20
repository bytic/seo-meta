<?php

declare(strict_types=1);

use ByTIC\SeoMeta\MetaManager;

$manager = new MetaManager();
$manager->setTitleBase('base');
$manager->appendTitle('page');

$manager->viewport()->addResponsive();

$manager->robots('index,follow');
$manager->author('GS');
$manager->description('GS');
$manager->keywords('GS,ByTIC');
$manager->addKeywords('PHP');

$manager->og('title', 'The title');
$manager->og('type', 'website');
$manager->og('url', 'https://gabrielsolomon.ro');
$manager->og('image', 'https://gabrielsolomon.ro/logo.jpg');

$manager->twitter('card', 'summary');
$manager->twitter('site', '@solomongaby');

$manager->link('canonical', 'https://gabrielsolomon.ro');
$manager->link('alternate', ['hreflang' => 'en',  'href' => 'https://en.pedroborg.es']);

return $manager;
