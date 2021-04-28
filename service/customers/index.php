<?php
require_once "../connect.php";   // connect database

$sql = "select * from Customers";
$customer = $conn->query($sql);
$customer->execute();

$result = $customer->fetchAll(PDO::FETCH_ASSOC);

if (count($result)){
    $response = array(
        'status' => true,
        'response' => $result
    );
    http_response_code(200);  //ส่งค่า Status Success
    echo json_encode($response);

}else {
    http_response_code(404);  // ส่งค่า Status ไม่มีข้อมูล
    echo json_encode(array('status' => false));

}


?>