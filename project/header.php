<?php  
session_start();

//สร้างเงื่อนไขประกาศตัวแปรรับค่าจากการคลิกเพื่อเปลี่ยนภาษา
 
if(isset($_GET['lang'])){
  $_SESSION['lang'] = $_GET['lang'];  //ชื่อภาษาตาม method get
}

//สร้างตัวแปรเซสชั่นเอาไปสร้าเงื่อนไขเรียกใช้ไฟล์
//print_r($_SESSION); 

?>
