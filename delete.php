<?php
$server="localhost"; 
$u="id21020670_tinyblackhat08"; 
$p="devHosting1008$";
$db="id21020670_tiny"; //khai bao cac bien 

//tao ket noi den csdl
$con=new mysqli($server,$u,$p,$db);
//tao cau lenh
$sql="delete from MyGuests where id=185";
if($con->query($sql)===true){
echo "delete thanh cong";
}
else{
echo "delete that bai: ".$con->error;
}
$con->close();
?>