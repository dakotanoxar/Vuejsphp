<?php
require_once "../response.php";   // connect database
require_once "../connect.php";

$response = new Response();

$params = array(
    'country' => $_GET['key']
);

$sql = "SELECT * FROM Customers WHERE Country = :country ";
$statement = $conn->prepare($sql);
$statement->execute($params);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($result)){
    $response->success($result , 'Success', 200);
    // $response = array(
    //     'status' => true,
    //     'response' => $result,
    // );
    // http_response_code(200);
    // echo json_encode($response);

}else {
    $response->error('Error Not Found:',404);
    // http_response_code(400);
    // echo json_encode(array('status'=>false));
}

?>