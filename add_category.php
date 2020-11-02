<?php
  session_start();
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

  $page='add_category';
  include('Include/header.php');
  
  ?>
  <div style="width:50%; margin-left:25%; margin-top:2%">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Category</li>
  </ol>
</nav>

  	<form action="add_category.php" method="post" name="categoryform" onsubmit="return validateform()">
  		<h1>Add Category</h1>
  <div class="form-group">
    <label for="email">Category Name:</label>
    <input type="text" name="category" class="form-control" placeholder="Enter Category Name" id="email">
  </div>
  <div class="form-group">
	    <div class="form-group">
	  <label for="comment">Description</label>
	  <textarea class="form-control" rows="5" name="des" id="comment" placeholder="Enter Description"></textarea>
	</div>
  </div>
  <input  type="submit" name="submit" class="btn btn-primary" value="Add Category" >
</form>
<script type="text/javascript">
  function validateform(){

    var x=document.forms['categoryform']['category'].value;
    if(x=="")
    {
        alert('Please Enter the Category name!!');
        return false;
    }

  }


</script>
  	

  </div>

  <?php

    include('Include/footer.php');
  ?>

  <?php
  include('db/connection.php');
  if (isset($_POST['submit'])) {
    $category_name=$_POST['category'];
    $des=$_POST['des'];
    $check=mysqli_query($conn,"select * from category where category_name='$category_name'");
      if(mysqli_num_rows($check)>0){
        echo "<script> alert('Category already exists')</script>";
        exit();
      }
      else{
    $query=mysqli_query($conn,"insert into category(category_name,description) value('$category_name','$des')");
    if($query){

      echo "<script> alert('category added succsefully')</script>";

    }
    else{
      echo "<script>alert('Please try again!!')</script>";
    }
  }
}

  ?>