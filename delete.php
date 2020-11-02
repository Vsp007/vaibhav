<?php 
    include('db/connection.php');
    $id = $_GET['edit1'];
    $query=mysqli_query($conn,"delete from category where id='$id' ");
    if($query){
      header('location:category.php');
     // echo "<script>alet('Category Deleted')</script>";


    }else{
      echo "<script>alet('Please Try Again!!')</script>";
    }
    ?>