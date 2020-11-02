<?php
  session_start();
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

  $page='category';
  include('Include/header.php');
  
  ?>
  <div style="width:50%; margin-left:25%; margin-top:2%">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current='page'>Category</li>
   
  </ol>
  	<div class="text-right">
  	<button class="btn" ><a href="add_category.php">Add Category</a></button></div>
  	 
  	
  		<table class="table table-bordered">
  			<tr>
  				<th>ID</th>
  				<th>Category</th>
  				<th>Description</th>
  				<th>Edit</th>
  				<th>Delete</th>	
  				</tr> 				
  			
  		
<?php
include('db/connection.php');
$query=mysqli_query($conn,"select * from category");
while($row=mysqli_fetch_array($query)){
	

?>

	<tr>
	<tbody>
	<td><?php  echo $row['id']; ?></td>
	<td><?php echo $row['category_name']; ?></td>
	<td><?php echo $row['description']?></td>
	<td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
	<td><a href="delete.php?edit1=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        
    </td>
	</tbody>
	</tr>
<?php } ?>
</table>
  	</div>
  	

  <?php

  	include('Include/footer.php');
  ?>