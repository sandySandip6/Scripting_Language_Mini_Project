<?php
include('database_conn.php');

if(isset($_GET['sn'])){
    $user_sn = $_GET['sn'];

    $sql = "DELETE FROM `topics_lists` WHERE `sn`='$user_sn'";

    $result = $conn->query($sql);
     
    if($result == TRUE){
        
        echo"Record deleted";
        header('location:crud_home.php');

    }else{
        // echo"Error".$sql. "<br>". $conn->error;
    }
}
?>