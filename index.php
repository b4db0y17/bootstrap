<?php

require './bootstrap/bootstrap.php';

$document = new bootstrap();

$document->head->Title('this is the title');

$document->head->stylesheet('./css/index.css');

$styles = [
    './css/html.css',
    './css/facebook.com'
];

$document->head->stylesheets($styles);

$document->createPage();