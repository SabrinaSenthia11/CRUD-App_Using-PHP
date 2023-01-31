<?php
include("function.php");

$objCrudAdmin =new crudApp();
if (isset($_POST['add_info'])){
  $return_msg = $objCrudAdmin->add_data($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <title> My First Bootstrap Task</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">CRUD App</a>
    </nav>

    <div class="container my-4 p-4 shadow"> 
  <h2><a style="text-decoration: none;" href="index.php">Student Database</a></h2>
  <form class="form" action="" method="POST" enctype="multipart/form-data">
    <?php if (isset($return_msg)){echo $return_msg;}?> 
    <input class="form-control mb-2" type="text" name="std_name" placeholder="Enter your name">
    <input class="form-control mb-2" type="number" name="std_roll" placeholder="Enter your ID">
    <label for="image">Upload your image</label>
    <input class="form-control mb-2" type="file" name="std_img"> 
    <input type="submit" value="Add Information" name="add_info" class="form-control bg-info"> 
  </form>
</div>
   
<div class="container my-4 p-4 shadow"> 
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th> 
        <th>Group</th>
        <th>Image</th>   
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr> 
        <td>1020</td>
        <td>Senthia</td>
        <td>Science</td>
        <td><?php
$image = 'path/to/image.jpg';
?>
<img src="<?php echo $image; ?>" alt="Image"></td>
        <td> 
          <a class="btn btn-danger" href="#">Edit</a> 
          <a class="btn btn-dark" href="#">Delete</a> 
  </td> 
  </tr>
</tbody>
      
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>