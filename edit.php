<?php
  session_start();
  error_reporting(0);
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

  $page='Update_category';
  include('Include/header.php');
  
  ?>
  <?php 
  	include('db/connection.php');
  	$id = $_GET['edit'];
  	$query=mysqli_query($conn,"select * from category where id='$id' ");
  	while($row=mysqli_fetch_array($query)){
  		$category=$row['category_name'];
  		$des=$row['description'];
  	}	

  ?>
  <div style="width:50%; margin-left:25%; margin-top:10%">
  	<form action="edit.php" method="post" name="categoryform" onsubmit="return validateform()">
  		<h1>Update Category</h1>
  		<div class="form-group">
  			<label for="ID">ID:</label>
  			<input type="text"  name="id1" class="form-control" value="<?php echo $id; ?>">
  		</div>
  <div class="form-group">

    <label for="email">Category Name:</label>
    <input type="text" name="category1" value="<?php echo $category; ?>" class="form-control" placeholder="Enter Category Name" id="email">
  </div>
  <div class="form-group">
	    <div class="form-group">
	  <label for="comment">Description:</label>
	  <textarea class="form-control" rows="5" name="des1" id="comment" placeholder="Enter Description"><?php echo $des; ?></textarea>
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
  		$category=$_POST['category1'];  		
  		$des=$_POST['des1'];
  		
  		$query1=mysqli_query($conn,"update category set category_name='$category',description='$des' where id='$id' ");
  			if($query1){
  				
  				echo "<script> alert('Category Updated')</script>";
  				echo "<script>window.location='http://localhost/news/category.php';</script>";

  				

  			}else{
  				echo "<script> alert('Category Not Updated')</script>";
  			}

  	
  }

  ?>

 <?php

    include('Include/footer.php');
  ?>

