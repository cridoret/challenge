<?php
require_once __DIR__ . '/bootstrap.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($twig) {
    $template = $twig->loadTemplate('hello.html.twig');
    
    return $template->render(array('name' => $name));
});

$app->error(function(\Exception $e) {
    if ($e instanceof NotFoundHttpException) {
        return new Response('The requested page could not be found.', 404);
    }

    $code = ($e instanceof HttpException) ? $e->getStatusCode() : 500;

    return new Response('We are sorry, but something went terribly wrong.<br>'.$e->getMessage(), $code);
});

return $app;