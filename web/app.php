<?php

require_once(__DIR__.'/../vendor/autoload.php');

use Einenlum\MedicalBullshitGenerator\Generator;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;

$app = new Application(['debug' => true]);

$app->register(new TwigServiceProvider(), [
    'twig.path' => __DIR__.'/../src/views',
]);

$app['asset_path'] = '/assets';

$app->get('/', function() use ($app) {
    return $app['twig']->render('home.html.twig', [
        'name'  => Generator::generateName(),
        'title' => Generator::generateTitle(),
    ]);
});

$app->run();
