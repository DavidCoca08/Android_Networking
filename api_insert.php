<?php
// 1 khai bao thong tin ket noi voi csdl
$server="localhost";
$u="id21020670_tinyblackhat08";
$p="devHosting1008$";
$db="id21020670_tiny";
//2. tao ket noi csdl
$conn = new mysqli($server,$u, $p, $db);
// 2.1 kiem tra ket noi
if($conn -> connect_error){
    die("ket noi loi". $conn->connect_error); // thong bao loi


}
//3 kiem tra chuyen du lieu vao API
if(isset($_GET['name']) && isset($_GET['price']) && isset($_GET['description'])){
    $name= $_GET['name']; // dua dl chuyen den vao bien name
    $price=$_GET['price'] ;// dua dl chuyen den vao bien price
    $description=$_GET['description'];// dua dl chuyen den vao bien description
    // 4. thuc hien insert du lieu
    $sql= "INSERT INTO products(name, price , description) VALUES ('$name', '$price', '$description')";
    if($conn->query($sql)=== TRUE){
        $response ["success"] =1;
        $response ["message"] =" Insert thanh cong";
        // chuyen du lieu sang dang JSOn
        echo  json_encode($response);//
    } else {
        $response ["success"] =0;
        $response ["message"] =" Loi Insert";
        // chuyen du lieu sang dang JSOn
        echo  json_encode($response);//
    }
}
$conn -> close();
?>      