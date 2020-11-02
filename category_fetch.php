<!doctype html>
<?php 
  include('db/connection.php');
  $category_name=$_GET['fetch'];
  ?>
<html lang="en">
<head>    
    <title>News</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>    
<link rel="stylesheet" type="text/css" href="Styles/blog.css">  
  </head>
<body>
      <div class="container">
      <header class="blog-header py-4" style="background-color:#FF8000;">
          <div class="col-12 text-center" >
            <a class="blog-header-logo text-white" style="background-color:#FF8000;" href="#">Large</a>
          </div>        
      </header>
      <div class="nav-scroller py-1 mb-2" >
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="index.php">Home</a>
          <?php 
              include('db/connection.php');
              $query=mysqli_query($conn,"select * from category ");
              while ($row=mysqli_fetch_array($query)) {
          ?>
          <a class="p-2 text-muted" href="category_fetch.php?fetch=<?php echo $row['category_name'];?>"><?php echo $row['category_name'];?></a>
          <!-- <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a> -->
          <?php } ?>
        </nav>
      </div>
     <!--  <div class="jumbotron JumoHeaderImg p-3 p-md-5  rounded ">
        <div class="col-md-6 px-0">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class=" font-weight-bold">Continue reading...</a></p>
        </div>
      </div> -->
    <?php 
    include('db/connection.php');
    $query=mysqli_query($conn,"select * from news where category='$category_name' ");
    while ($row=mysqli_fetch_array($query)) {
    ?>
    <br>
   <div class="card">
        <div class="row no-gutters">
            <div class="col-auto">
                <img class="img img-fluid img-thumbnail" width="500px" height="400px"  src="Images/<?php echo $row['thumbnail']?>"  alt="image is loading">
            </div>
            <div class="col">
                <div class="card-block px-2">
                   <strong class="d-inline-block mb-2 text-primary"><?php echo $row['category'];?></strong>
                    <div class="mb-1 text-muted"><?php echo $row['date'];?> by mark</div>
                    <h3 class="display-6 font-bold"><?php echo $row['title'];?></h3>
                   <p class="lead my-3"><?php echo substr($row['description'],0,100);?></p>
                   <p class="lead mb-0"><a href="single_page.php?page=<?php echo $row['id'];?>" class="font-weight-bold" >Continue reading...</a></p>
                </div>
            </div>
        </div>        
  </div>
<?php  } ?>  
  </div>     
 </body>
</html>