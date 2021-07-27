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
  <h2>Login</h2>
  <span> Don't have account? <a href="register.php">Sign Up Here</a>
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
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
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

</body>
</html>

  
  <?php 
  session_start();
  include('Inc/conn.php');
  if(isset($_POST['login'])){

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $sql="select * from user where username='$username' AND password='$password'";
    $result = mysqli_query($connect,$sql);
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);   
    if($check_login == 0){
     echo "<script>alert('Password or username is incorrect, please try again!')</script>";
     exit();
   }  
   if($check_login > 0){ 
   $_SESSION['userid'] = $row_login['userid'];
 //  $_SESSION['username'] = $username;  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('index.php','_self')</script>";
  }
}
?>