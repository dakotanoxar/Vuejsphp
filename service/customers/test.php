<?php
require_once "../response.php";
require_once "../connect.php";   // connect database

// $response = new Response(); 

$sql = "select * from Customers";
$customer = $conn->query($sql);
$customer->execute();

$result = $customer->fetchAll(PDO::FETCH_ASSOC);

if (count($result)){

   Response::success($result, 'Success', 200); //ใช้ static Response ได้เฉพาะ php 7 เท่านั้น
    // $response = array(
    //     'status' => true,
    //     'response' => $result
    // );
    // http_response_code(200);  //ส่งค่า Status Success
    // echo json_encode($response);
}else {
   Response::error('Error', 404);    //ใช้ static Response ได้เฉพาะ php 7 เท่านั้น

    // http_response_code(404);  // ส่งค่า Status ไม่มีข้อมูล
    // echo json_encode(array('status' => false));
}


?>

