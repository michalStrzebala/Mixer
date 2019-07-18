<?php

$app->get('/', function ( $request, $response, $agrs) {
    // Use the PSR 7 $request object

    PageController::index( $response, $this );

    return $response;
});

$app->post('/mix', function ($request, $response, $args) {

    MixerController::mix($request, $response, $this );

//    return $this->view->render($response, 'profile.html.twig');
})->setName('mix');