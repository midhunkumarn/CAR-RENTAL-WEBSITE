<?php
$host="localhost";
$username="root";
$password="";
$dbname="advance";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $text=$_POST['text'];
    $license=$_POST['license'];
    $days=$_POST['days'];
    $hours=$_POST['hours'];
    $fdate=$_POST['fdate'];
    $tdate=$_POST['tdate'];

$con=new mysqli('localhost','root','','advance');
if($con){
   // echo " succesful";
   $sql = "insert into data (name,phone,text,license,days,hours,fdate,tdate)values('$name','$phone','$text','$license','$days','$hours','$fdate','$tdate')";
   $result=mysqli_query($con,$sql);
   if($result){
    header("Location:bookingsuccess.html");
   } else{
    die(mysqli_error($con));
   }
}else {
    die(mysqli_error($con));
}
}
?>