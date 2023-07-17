<?php
$server="localhost"; 
$u="id21020670_tinyblackhat08"; 
$p="devHosting1008$";
$db="id21020670_tiny"; //khai bao cac bien
//tao ket noi den csdl
$con=new mysqli($server,$u,$p,$db);
//tao cau lenh
$sql="insert into MyGuests (firstname,lastname,email)
values ('firstname1','lastname1','email11')";
if($con->query($sql)===true){
echo "them thanh cong";
}
else{
echo "them that bai: ".$con->error;
}
$con->close();
?>