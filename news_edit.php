<?php
  session_start();
  error_reporting(0);
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

 
  include('Include/header.php');
  
  ?>
  <?php 
    include('db/connection.php');
    $id = $_GET['edit'];
    
    $query=mysqli_query($conn,"select * from news where id='$id' ");
    while($row=mysqli_fetch_array($query)){
       $title=$row['title'];      
       $des=$row['description'];
       $date=$row['date'];  
      $category=$row['category'];
      $thumbnail=$row['thumbnail'];
    } 

  ?>
  <div style="width:50%; margin-left:25%; margin-top:10%">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="news.php">News</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update News</li>
  </ol>
    <form action="news_edit.php" enctype="multipart/form-data" method="post" name="categoryform" onsubmit="return validateform()">
      <h1>Update News</h1>
      <div class="form-group">
        <label for="ID">ID:</label>
        <input type="text"  name="id1" class="form-control" value="<?php echo $id; ?>" readonly>
      </div>
  

    <div class="form-group">
    <label for="email">Title:*</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title" id="email" value="<?php echo $title; ?>">
  </div>

  <div class="form-group">
      <div class="form-group">
    <label for="comment">Description:</label>
    <textarea class="form-control" rows="5" name="des1" id="comment" placeholder="Enter Description"><?php echo $des; ?></textarea>
  </div>

  <div class="form-group">
    <label for="date">Date:*</label>
    <input type="date" name="date" class="form-control" id="email" value="<?php echo $date; ?>" />
  </div>

  <div class="form-group">
    <label for="email">Category:*</label>
    
    <select name="category" class="form-control">
    <option><?php echo $category;?></option>  
      <?php 
    include('db/connection.php');
    $query=mysqli_query($conn,"select * from category");

    while($row=mysqli_fetch_array($query)){
      //$cat_name=$row['category_name'];


    ?>
        
        <option name="option_category" ><?php echo $row['category_name']; ?></option>
        <!-- <option value="">2</option> -->
      <?php } ?>
    </select>

  </div>

  <div class="form-group">
    <label for="email">Thumbnail:</label>
    <input type="file" name="thumbnail" value="<?php echo $thumbnail; ?>" class="form-control img-thumbnail"  id="email">
    <img class="img img-thumbnail" src="Images/<?php echo $thumbnail; ?>" alt="Image is loading" height="100" width="100">
  </div>

  
  </div>
  <input  type="submit" name="submit" class="btn btn-primary" value="Update News" >
</form>
<script type="text/javascript">
  function validateform(){

    var x=document.forms['categoryform']['category1'].value;
    if(x=="")
    {
        alert('Please Enter the Category name!!');
        return false;
    }

  }


</script>
  </div>
  <?php
    include('db/connection.php');
    if(isset($_POST['submit'])){
      $id=$_POST['id1'];
      $title=$_POST['title'];          
      $des=$_POST['des1'];
      $date=$_POST['date'];
      $category=$_POST['category'];
      $thumbnail=$_FILES['thumbnail']['name'];
      $tmp_thumbnail= $_FILES['thumbnail']['tmp_name'];
   
      move_uploaded_file($tmp_thumbnail, "Images/$thumbnail");

      
      $query1=mysqli_query($conn,"update news set  title='$title',description='$des',date='$date',thumbnail='$thumbnail',category='$category' where id='$id' ");
        if($query1){
          
          echo "<script> alert('News Updated')</script>";
          echo "<script>window.location='http://localhost/news/news.php';</script>";

          

        }else{
          echo "<script> alert('News Not Updated')</script>";
        }

    
  }

  ?>

 <?php

    include('Include/footer.php');
  ?>

