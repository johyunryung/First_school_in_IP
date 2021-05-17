<?php
$conn=mysqli_connect('localhost','scott','tiger','user');
if($conn){
   echo "mysql database에 연결되었습니다";
}else{
   echo "mysql database에 연결 실패";
}
?>