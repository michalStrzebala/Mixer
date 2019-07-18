<?php


class PageController
{

    public static function index( $response, $object ){

        return $object->view->render( $response, 'index.html.twig');

    }

}