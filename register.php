<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <span>Already have account? <a href="Login.php">Login Now</a>
    <form class="form-horizontal" action="/action_page.php">

      <div class="form-group">
        <label class="control-label col-sm-2" for="username">Username:</label>
           <div class="col-sm-10">
             <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
           </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="fullname">Fullname:</label>
        <div class="col-sm-10">
          <input type="fullname" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname">
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="image">Image:</label>
        <div class="col-sm-10">
          <input type="file" name="image">
        </div>
      </div> 

      <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="cancel" class="btn btn-default" >Cancel</button>
      </div>
    </div>
      
    </form>
</div>

  <?php
  include('Inc/conn.php');
  if (isset($_POST['user'])) 
  { 
    $file =$_FILES['image']['name'];
    print_r($_FILES['image']);
    $file_tmp =$_FILES['image']['tmp_name'];
    $path = "Avartar/";
    move_uploaded_file($file_tmp,$path.$file);

    $id = $_POST['ID'];
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $fullname = $_POST['Fullname'];
    $image = $_POST['Image'];
    $sql="insert into user values (NULL,'$username','$password','$fullname','$file')";
    $result = mysqli_query($conn,$sql);
    if ($result) 
    {
      echo "<script>alert('Account has been created successfully!')</script>";
     //echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo"<script>alert('Error')</script>";
    }  
  }
  ?>

</div>