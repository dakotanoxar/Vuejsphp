<?php
class Response {
    public static function success ($result , $message , $code){
        $response = array(
            'status' => true,
            'response' => $result,
            'message' => $message
        );
        http_response_code($code);
        echo json_encode($response);
    }
    public static function error ($message = 'Error', $code = 400){
        $response = array(
            'status' => false,
            'message' => $message
        );
        http_response_code($code);
        echo json_encode($response);
    }
}



?>