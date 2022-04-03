<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<style>
      table {
        border-collapse: separate;
        border-spacing: 0 40px;
      }


		.form  
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	
		#password1  
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	
		#password2
		{
			 height:60px;
			width:500px;
			font-size:14pt;
			position:relative;
			left:100px;
		}
	p{
		position:relative;left:100px;color:#fff
		
	}
	
</style>

<link rel=stylesheet href="style/mystyle.css">
</head>
<body class=nav>

<nav style="background-color:rgb(33,33,33);">
	<a href="index.php">
		<img src="image/logo.png" class="logo">
	</a>	

<h1 style="color:rgb(233,29,66);position:relative;left:100px;">Create CFtv Account</h1>
<p style="left:1500px;top:-100px;"> Already have account?</p>
<a href="logIn.php" style="color:rgb(233,29,66);position:absolute;right:200px;top:140px;">Sign In </a>
</nav>

<form  action="signUp.php" method="post" onsubmit="alert('Sign up successfully');">
	<tr>
	<td>
	<input type="email" class=form name=email placeholder=Email  required>
	</td>
	</tr>
	<table>
	<tr>
	<td>

	<input type=password  id=password1 name=password placeholder=Password  
			pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type=password  id=password2 name=retype placeholder="Retype password" required >
	<p> Contain minimum 8 characters <br>
												Include at least 1 number  <br>
												Include both lowercase and uppercase letters
										</p>
										
	</td>

	</tr>
		<td>
		<input type="text" class=form name=name placeholder=Name required>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<select class="form" name="gender"  required>
      <option value="Female">Female</option>
      <option value="Male">Male</option>
    
    </select>
		
		</td>
	<tr>
		<td>
		<p > 
			Date of Birth
			</p>
		<input type="date" class=form name=dateOfBirth placeholder="Date of Birth"  required>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="tel" class=form name=mobileNumber placeholder="Mobile Number" required>
			
		</td>	
										</tr>
	<tr>
	<td>
		<input type="text" class=form name=address placeholder="Address" required>
	</td>
	</tr>
		
	</table>
	<br>
	<input type="submit" name="Submit" value="Submit" onclick="ValidatePassword()"
	style=" background-color: #E91D42; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  left:1100px;">
	
	
	
</form >



<?php include('includes/footer.php');?>



<?php

	// Check If form submitted, insert form data into announcement table.
	if(isset($_POST['Submit'])) {
		//Obtain data posted from the form
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$dob = $_POST['dateOfBirth'];
		$mobileNumber = $_POST['mobileNumber'];
		$address = $_POST['address'];
		
		// include database connection file
		include_once("config.php"); 
				
		// Insert announcement data into table
		$result = mysqli_query($mysqli, "INSERT INTO member(m_name,m_email,m_password,m_dob,m_gender,m_number,m_address) 
		VALUES('$name','$email','$password','$dob','$gender','$mobileNumber','$address')");
		

	}
	?>



<script>
	
 function ValidatePassword() {
        var password = document.getElementById("password1").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
		
        return true;
    }

</script>







</body>







</html>