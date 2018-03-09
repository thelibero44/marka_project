<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<style>
		body {
			font-family: Arial;
                        background-color: #14A76C;
			}
		#header {
			background-color: #86C232;
			color: white;
			padding: 15px;
			}
		#content {
			padding: 25px;
			}
		#footer {
			background-color: #6CD8EE;
			color: white;
			padding: 10px;
                        font-size: 15px;
			}
	</style>
	<script>
                "use strict";
                
		var validate = function(event){
                    
                    var theForm = document.getElementById('registered');
  
                    if (theForm.idfirstname.value === "")
                            {
                            alert("You must provide a first name.");
                            event.preventDefault();
                            }
                    if (theForm.idlastname.value === "")
                            {
                            alert("You must provide a last name.");
                            event.preventDefault();
                            }
                    if (theForm.idusername.value === "")
                            {
                            alert("You must provide a username.");
                            event.preventDefault();
                            }
                    if (theForm.idpassword.value === "")
                            {
                            alert("You must provide a password.");
                            event.preventDefault();
                            }
                    if (theForm.idpasswordconfirm.value === "")
                            {
                            alert("You must confirm your password.");
                            event.preventDefault();
                            }
                    if (theForm.idemail.value === "")
                            {
                            alert("You must provide an email.");
                            event.preventDefault();
                            }
                    if (theForm.idphonenumber.value === "")
                            {
                            alert("You must provide a phone number.");
                            event.preventDefault();
                            }
                    if (theForm.idcreditcard.value === "")
                            {
                            alert("You must provide a credit card number.");
                            event.preventDefault();
                            }
                        }
		

                //tell the browser what to do when the form gets submitted
                window.onload = function () {
                    document.getElementById('registered').onsubmit = function(event){validate(event);};
                }
	</script>
</head>
<body>
	<div id="header">
        
            <h1>Register<h1>
	<hr>
	</div>
	
	<div id="content">
            <form name="registered" id="registered"  action="marka_login.php">
                
		<label for="idfirstname">First Name:</label>
		<input type="text" name="yourfirstname" id="idfirstname" size="30" maxlength="100">
		
                <br>
		<br>
		
                <label for="idlastname">Last Name:</label>
		<input type="text" name="yourlastname" id="idlastname" size="30" maxlength="100">
		
                <br>
		<br>
                
                <label for="idusername">Username:</label>
		<input type="text" name="yourusername" id="idusername" size="30" maxlength="100">
		
                <br>
		<br>
		
                <label for="idpassword">Password:</label>
		<input type="text" name="yourpassword" id="idpassword" size="30" maxlength="100">
                
                <br>
		<br>
               
                <label for="idpasswordconfirm">Confirm Password:</label>
		<input type="text" name="yourpasswordconfirm" id="idpasswordconfirm" size="30" maxlength="100">
                
                <br>
		<br>
                
                <label for="idemail">Email Address:</label>
		<input type="text" name="youremail" id="idemail" size="30" maxlength="100">
                
                <br>
		<br>
                
                <label for="idphonenumber">Phone Number:</label>
		<input type="text" name="yourphonenumber" id="idphone_number" size="30" maxlength="100">
		
                <br>
		<br>
                
                <label for="idcreditcard">Credit Card Number:</label>
		<input type="text" name="yourcreditcard" id="idcreditcard" size="30" maxlength="100">
		
                <br>
		<br>
		
           

		<input type="submit" name="submitbutton" id="submitbutton" value="Register">
		<br>
		<br>
		<div id="box">
		</div>
	</form>
	</div>
	
	<div id="footer">
            <hr>
            <h2>MARKA</h2>
            
	

	</div>

</body>
</html>
