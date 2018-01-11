<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $subtemplate = "";
    if ($args['name']) {
      $subtemplate = 'patterns/' . filter_var($args['name'], FILTER_SANITIZE_STRING) . '.twig';
    }

    return $this->view->render($response, 'default.twig', [
        'subtemplate' => $subtemplate
    ]);
});
