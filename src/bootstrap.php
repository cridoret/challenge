<?php
require_once __DIR__ . '/../vendor/silex.phar';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerPrefixes(array(
    'Twig_' => __DIR__ . '/../vendor/Twig/lib',
));

$loader->register();

$twigLoader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($twigLoader, array(
    'cache' => __DIR__ . '/../cache/twig',
    'debug' => true,
));