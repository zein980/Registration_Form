<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Page</title>
    <link href="register.css" rel="stylesheet">
    <script defer src="register.js"></script>




</head>
<?php include("header.php"); ?>
<body>

   

    <div class="container">
      <h1>Registeration</h1>
      <br>
      <p id="txt">Please fill in this form to create an account.</p>
      <br>
      <p id="rd">All fields are required *</p><br>
      <hr>
      <form id="form" action='DB_Ops.php' method="post"   enctype="multipart/form-data">
        <div class="user-detail">  
          <div class="input-control">
            <span class="details">Full Name</span>
            <input type="text" id="full_name"  placeholder="Enter your fullname"name="full_name">
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Username</span>
            <input type="text" id="user_name" placeholder="Enter your username"name="user_name" >
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Birthdate</span>
            <input type="date"action="/DB_Ops.php" id="birthdate"placeholder="Enter your birthdate" name="birthdate" >
            <button class="btn"  id="check" name="check_actors"  onclick='showHint(document.getElementById("birthdate").value)'>Check actors</button>
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Phone</span>
            <input type="tel" id="phone" placeholder="Enter your phone" name="phone">
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Address</span>
            <input id="address"placeholder="Enter your address" name="address">
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Password:</span>
            <input type="password" id="password"placeholder="Enter your password" name="password">
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Confirm Password</span>
            <input type="password" id="confirm_password" placeholder="confirm password"name="confirm_password">
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">User Image</span>
            <input type="file" id="user_image" name="user_image" accept="image/*" >
            <div class="error"></div>
          </div>
          <div  class="input-control">
            <span class="details">Email</span>
            <input type="email" id="email" placeholder="Enter your email" name="email">
            <div class="error"></div>
          </div>
          
        </div>
        <div class="button">
        
            <button type="submit" name="submit"  >Register</button> 
        </div>
      </form>
 
    </div>
    <?php include("Footer.php"); ?>
    
</body>
</html>