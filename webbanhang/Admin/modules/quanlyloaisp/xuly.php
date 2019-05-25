<?php
    //include('../connectMySQL.php');
    require '../connectMySQL.php';
    $tenloaisp=$_POST['tenloaisp'];
    $thutu=$_POST['thutu'];
    if(isset($_POST['thutu'])){
        //them
        $query ="insert into loaisp values(null,'$tenloaisp','$thutu')";
        $result =mysqli_query($connect,$query);
        header('location:../../index.php?quanly=quanlyloaisp&ac=them');
    }
    else if(isset($_POST['sua'])){
        //sua
    }else {
        //xoa
    }
    //echo $tenloaisp; 
    //echo $thutu;
?>