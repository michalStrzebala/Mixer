<?php

$app->get('/', function ( $request, $response, $agrs) {
    // Use the PSR 7 $request object
    MixerController::index( $response, $this );
});

$app->post('/', function ($request, $response, $args) {
    MixerController::mix($request, $response, $this );
})->setName('mix');