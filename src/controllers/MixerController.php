<?php


class MixerController
{

    public static function index( $response, $object ){

        return $object->view->render( $response, 'index.html.twig');

    }

    public static function mix( $request, $response, $object  ){

        $text = $request->getParsedBody('text');

        return $object->view->render( $response, 'index.html.twig', [ 'text' =>  self::synonymMixer( $text ), 'originalText' => $text['text'] ]);

    }

    private function synonymMixer( $text ){

    $re = '/{(.*?)}/';
        $text = preg_replace_callback(
        $re,
        function ($matches) {
            preg_match_all('/[^|]+/m', $matches[1], $array);
            return $array[0][rand(0, count($array[0]) - 1)];
        },
        $text
    );
    return $text;
}

}