<?php


class MixerController
{

    public static function mix( $request, $response, $object  ){

        var_dump($request->getBody());

        return $object->view->render( $response, 'profile.html.twig');

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