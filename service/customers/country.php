<?php
require_once "../connect.php";   // connect database

$params = array(
    'country' => $_GET['key']
);

$sql = "SELECT * FROM Customers WHERE Country = :country ";
$statement = $conn->prepare($sql);
$statement->execute($params);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($result)){
    $response = array(
        'status' => true,
        'response' => $result,
    );
    http_response_code(200);
    echo json_encode($response);

}else {
    http_response_code(400);
    echo json_encode(array('status'=>false));
}

?>