<?php

$app->get('/', function ( $request, $response, $agrs) {
    // Use the PSR 7 $request object
    PageController::index( $response, $this );
});

$app->post('/mix', function ($request, $response, $args) {
    MixerController::mix($request, $response, $this );
})->setName('mix');