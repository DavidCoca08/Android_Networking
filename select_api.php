<?php
header('Access-Control-Allow-Origin: *');//cho phep full quyen
$server="localhost"; 
$u="id21020670_tinyblackhat08"; 
$p="devHosting1008$";
$db="id21020670_tiny"; //khai bao cac bien
//tao ket noi den csdl
$con=new mysqli($server,$u,$p,$db);
//tao cau lenh
$sql="select * from MyGuests";
$result=$con->query($sql);//doc du lieu va dua vao result
while ($row[]=$result->fetch_assoc())//doc tung dong
{
$jon=json_encode($row);//chuyen du lieu sang json
}
echo '"MyGuests":{'.$jon.'}';
$con->close();
?>