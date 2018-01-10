<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    $subtemplate = "";
    if ($args['name']) {
      $subtemplate = 'patterns/' . $args['name'] . '.twig';
    }

    return $this->view->render($response, 'default.twig', [
        'subtemplate' => $subtemplate
    ]);
});
