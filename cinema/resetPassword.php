<!DOCTYPE html>	
<html>
<head>
	<title>Log In</title>
<style>
      table {
        border-collapse: separate;
        border-spacing: 0 40px;
      }
	  body{
	background-color:rgb(33,33,33);  
	  }
	  p{
		  font-size:40px;
		  position:relative;
		  left:100px;
		  color:#fff;
		  text-align:center;
	  }
	  #login 
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	form{
		position:relative;
		left:350px;
	}
	  
</style>
<link rel=stylesheet href="style/mystyle.css">
</head>
<body>
<nav style="background-color:rgb(33,33,33);" >
	<a href="index.php">
		<img src="image/logo.png" class="logo" alt="logo">
	</a>	
</nav>
<h1 style="color:rgb(233,29,66);position:relative;text-align:center;">Reset Your Password</h1>

	<form action="resetPassword.php" method="post" >
				<table>

				<tr>
				<td>
				<p>Account Email	:</p>

				</td>
					<td>
					<input type="email"  id="login"  name='email' required>
					</td>

				</tr>


				</table>
	<input type="submit"  name=Submit value="Submit" style=" background-color: #E91D42; 
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  left:450px;
   font-size:30px;	">

</form>


<br><br><br>


<?php include "includes/footer.php" ;?>


<?php

	// Check If form submitted, insert form data into announcement table.
	if(isset($_POST['Submit'])) {
		//Obtain data posted from the form
		$email = $_POST['email'];
	
		// include database connection file
		$connect = mysqli_connect("localhost", "root", "", "admin") or die('DB setting not valid...!');
        $rs = mysqli_query($connect, "select * from member where m_email ='$email' ");
        $row = mysqli_fetch_assoc($rs);
	

	 if ($row){
       
       $result = mysqli_query($connect, "UPDATE member SET m_password='abcd1234' WHERE m_email='$email'");
            echo '<script language="javascript">';
			echo 'alert("The new password is abcd1234");';
			echo 'window.location = "login.php"';
			echo '</script>';
        }
        else{
			 echo '<script language="javascript">';
			echo 'alert("The email is not registered");';
			echo 'window.location = "resetPassword.php"';
			echo '</script>';
			
        }    
	
	
		
	}
	?>




</body>






</html>