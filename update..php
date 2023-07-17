<?php
$server="localhost"; 
$u="id21020670_tinyblackhat08"; 
$p="devHosting1008$";
$db="id21020670_tiny"; //khai bao cac bien
//tao ket noi den csdl
$con=new mysqli($server,$u,$p,$db);
//tao cau lenh
$sql="update MyGuests set firstname='firstname update'
where id=184";
if($con->query($sql)===true){
echo "update thanh cong";
}
else{
echo "update that bai: ".$con->error;
}
$con->close();
?>