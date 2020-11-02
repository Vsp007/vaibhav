<?php
  session_start();
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

  $page='add_news';
  include('Include/header.php');
  
  ?>
  <div style="width:50%; margin-left:25%; margin-top:2% ">
    <div>
      
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="news.php">News</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add News</li>
  </ol>

        
      
    </div>
  	<form action="add_news.php" method="post" name="categoryform" enctype="multipart/form-data" onsubmit="return validateform()">
  		<h1>Add News</h1>
  <div class="form-group">
    <label for="email">Title:*</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title" id="email"/>
  </div>
  <div class="form-group">
	    <div class="form-group">
	  <label for="comment">Description*</label>
	  <textarea class="form-control" rows="5" name="des" id="comment" placeholder="Enter Description"></textarea>
	</div>
  <div class="form-group">
    <label for="date">Date:*</label>
    <input type="date" name="date" class="form-control" id="email"/>
  </div>
  <div class="form-group">
    <label for="email">Category:*</label>
    
    <select name="category" class="form-control">
      <option value="select_cat">Select category</option>
      <?php 
    include('db/connection.php');
    $query=mysqli_query($conn,"select * from category");
    while($row=mysqli_fetch_array($query)){
      //$cat_name=$row['category_name'];


    ?>
        
        <option name="option_category"><?php echo $row['category_name']; ?></option>
        <!-- <option value="">2</option> -->
      <?php } ?>
    </select>

  </div>
   <div class="form-group">
    <label for="date">Thumbnail:</label>
    <input type="file" name="thumbnail" class="form-control img-thumbnail"  id="email"/>
  </div>
  </div>
  <input  type="submit" name="submit" class="btn btn-primary" value="Add News"/>
</form>

<script type="text/javascript">
  function validateform(){

    var x=document.forms['categoryform']['title'].value;
    var y=document.forms['categoryform']['des'].value;
    var z=document.forms['categoryform']['date'].value;
   
    if(x=="")
    {
        alert('Please Enter the Title!!..');
        return false;
    }
    if(y=="")
    {
        alert('Please Enter the Description!!..');
        return false;
    }
    if(z=="")
    {
        alert('Please Enter the Date!!..');
        return false;
    }
    

  }


</script>
</div>

<?php
  include('db/connection.php');
  if(isset($_POST['submit'])){
      $title=$_POST['title'];
      $description=$_POST['des'];
      $date=$_POST['date'];
      $category=$_POST['category'];
      $thumbnail=$_FILES['thumbnail']['name'];
      $tmp_thumbnail= $_FILES['thumbnail']['tmp_name'];
   
      move_uploaded_file($tmp_thumbnail, "Images/$thumbnail");

       $query1=mysqli_query($conn,"insert into news(title,description,date,category,thumbnail) value('$title','$description','$date','$category','$thumbnail')");
      if($query1)
      {
          echo "<script> alert('News added succsefully')</script>";
          
      }else{
          echo "<script>alert('Please try again!!')</script>";
      }




  }
?>
  	

  

  <?php

    include('Include/footer.php');
  ?>

  