<html>
   
   <head>
      <title>Login Page</title><!-- forget password project1 file-->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="stt.css">
      <style type = "text/css">
         body {
            
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
         .button{width: 100%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: white;
  color: blue;
  border-radius: 2px;}

   .button1{width: 100%;
  padding: 5px 0px;
  margin: 8px 0;
  box-sizing: border-box;
  background-color: white;
  color: blue;
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
<ul><div class="navbar">
  <a href="home.php">HOME</a>
  <a href="contact.php">BACK</a> 
</div>
<div style="background-color:; opacity: 0.9; padding:155px; font-size: 27px; color: white;" class="di1">
	
      <div align = "left">
         <div style = "width:515px;height: 340px; background-color: ; opacity: 0.9 " align = "left" >
            <div style = "background-color:#333333; color:#FFFFFF; padding:4px;"><b>Forget Password</b></div>
				
            <div style = "margin:10px;">
               <table>
               <form action = "" method = "post">
                  <tr><td><label style="font-size: 20px; color: white; font-weight: bold; ">Name  :</label></td><td><input type = "text" name = "username" class = "label"/></td></tr>

                  <tr><td><label style="font-size: 20px; color: white; font-weight: bold; ">Phone No :</label></td><td><input type = "text" name = "" pattern="[0-9]{10}" class = "label"/></td></tr>
                  <tr><td>
                  <label style="font-size: 20px; color: white; font-weight: bold; ">New Password :</label></td><td><input type = "password" name = "password" class = "label" /></td></tr>

                  <tr><td><label style="font-size: 20px; color: white; font-weight: bold; ">Confirm Password  :</label></td><td><input type = "text" name = "username" class = "label"/></td></tr>

                  <tr><td>
                  <input type = "submit" value = "Submit" class="button" /></td>
                  <td><input type = "Reset" value = "Reset" class="button1" /></td>
               </form>
               </table>
               <div style = "font-size:11px; color:#cc0000; margin-top:100px"></div>
					
            </div>
		   </div>
			
      </div>
   </div>

   </body>
</html>
