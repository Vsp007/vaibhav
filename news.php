<?php
  session_start();
  error_reporting(0);
  if($_SESSION['email']==true){

  }
  else{
    header('location:Admin_login.php');
  }

  $page='news';
  include('Include/header.php');
  
  ?>
  <div style="width:50%; margin-left:25%; margin-top:2%">
  	<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current='page'>News</li>
   
  </ol>
</nav>
  	<div class="text-right">
  	<button class="btn" ><a href="add_news.php">Add News</a></button></div>
  	 
  	
  		<table class="table table-bordered">
  			<tr>
  				<th>ID</th>
  				<th>Title</th>
  				<th>Description</th>
  				<th>Date</th>
  				<th>Category</th>
  				<th>Thumbnail</th>
  				<th>Edit</th>
  				<th>Delete</th>
  					
  				</tr> 				
  			
  		
<?php
include('db/connection.php');


$page=$_GET['page'];
if ($page=="" || $page=="1") {
	$page1=0;
}
else{
	$page1=($page*3)-3;
}
$query=mysqli_query($conn,"select * from news limit $page1,3");
while($row=mysqli_fetch_array($query)){
	

?>
	
<tr>
	<tbody>
	<td><?php  echo $row['id']; ?></td>
	<td><?php echo $row['title']; ?></td>
	<td><?php echo $row['description']?></td>
	<td><?php echo $row['date']?></td>
	<td><?php echo $row['category']?></td>
	<td><img class="img-thumbnail" src="Images/<?php echo $row['thumbnail']?>" alt="image is loading" width="100" height="100"></td>
	<td><a href="news_edit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td> 
	<td><a href="news_delete.php?edit1=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
        
    
	</tbody>
	</tr>
	
<?php } ?>
	</table>
	<ul class="pagination" disable>
		<li class="page-item"><a href="#" class="page-link">Previous</a></li>
	
	<?php
	$sql=mysqli_query($conn,"select * from news");
	$count=mysqli_num_rows($sql);
	$a=$count/2;
	ceil($a);
	for($i=1;$i<$a;$i++){
		?>
		<!-- </table> -->
		<!-- <ul class="pagination"> -->
			<li class="page-item" ><a class="page-link" href="news.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
	
<?php } ?>
		<li class="page-item" disable><a href="#" class="page-link">Next</a></li>
	

</ul>
  	
</div>
  <?php

  	include('Include/footer.php');
  ?>