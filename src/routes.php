<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $subtemplate = 'patterns/';
    $patterns = scandir('../templates/patterns');
    $twigFile = filter_var($args['name'], FILTER_SANITIZE_STRING) . '.twig';

    foreach ($patterns as $patternFile) {
        if ($patternFile == $twigFile) {
            $subtemplate = $subtemplate . $patternFile;
        }
    }

    return $this->view->render($response, 'default.twig', [
        'subtemplate' => $subtemplate
    ]);
});
