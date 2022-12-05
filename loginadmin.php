
<html>
   
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="stt.css">
      <style type = "text/css">
         body {
            
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         .button{width: 180%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: white;
  color: black;
  border-radius: 2px;}

   .button1{width: 180%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: white;
  color: black;
  border-radius: 2px;}

  .label{
  width: 170px;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid white;
  border-radius: 2px;
}


      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
      <div class="header">
  <h1 style="color: white; font-size: 220%;" >  MEDICAL STORE BILLING SYSTEM</h1>
</div>
<hr>
<ul >
  <div class="navbar">
  <a href="home.php">HOME</a>
  <a href="aboutus.php">ABOUT US</a>
  <div class="dropdown">
    <button class="dropbtn">LOGIN
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content">
      <a href="loginadmin.php">Admin</a>
      <a href="login.php">User</a>
    </div>
  </div>
  <a href="contact.php">CONTACT US</a> 
</div>  
</ul>

<div style="background-color:; opacity: 0.9; padding:162px; font-size: 27px; color: white;" class="di1">
  
      <div align = "left;">
         <div style = "width:500px;height: 250px; background-color: ; opacity: 0.9 " align = "left" >
            <div style = "background-color:#333333; color:#FFFFFF; padding:4px;"><b>Login</b></div>
        
            <div style = "margin:10px;">
               <table>
               <form action = "" method = "post">
                  <tr><td><label style="font-size: 20px; color: white; font-weight: bold; ">UserName  :</label></td><td><input type = "text" name = "username" class = "label"/></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td>
                  <label style="font-size: 20px; color: white; font-weight: bold; ">Password  :</label></td><td><input type = "password" name = "password" class = "label" /></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr><td>
                  <input type = "submit" value = "Login" name="login" class="button" /></td>
                  <td></td><td><input type = "button" onclick="location.href='forgetpass.php';" value = "Forget Password" class="button1" /></td>
               </form>
               </table>
               <div style = "font-size:11px; color:#cc0000; margin-top:150px"></div>
          
            </div>
       </div>
      
      </div>
   </div>

   </body>
</html>

<?php
    $db = mysqli_connect("localhost","root","","pharma");

      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT `uname`,`pass` FROM `user` WHERE `uname` = '$myusername' && `pass` = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$row=$result->mysqli_fetch_array(MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if(isset($_POST['login'])){
      if($count == 1) {
        // session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         if($rows['uname']=$myusername && $rows['pass']=$mypassword){
         header("location: createuser.php");
      }
    }
      else {
         echo'<script>alert("Your Login Name or Password is invalid") </script>';
      }
    }
    
?>