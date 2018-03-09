<!DOCTYPE html>
<html>
<head>
	<title>Marka Login</title>
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
                    
                    var theForm = document.getElementById('loggedin');
  
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
                            
    }
                //tell the browser what to do when the form gets submitted
                window.onload = function () {
                    document.getElementById('loggedin').onsubmit = function(event){validate(event);};
                }
	</script>
</head>
<body>
	<div id="header">
        
        <h2>Login<h2>
	<hr>
	</div>
	
	<div id="content">
            <form name="loggedin" id="loggedin"  action="   "> <!-- Form needs an action after login -->
		<p>Please Log in</p>
		<label for="idusername">Username:</label>
		<input type="text" name="yourusername" id="idusername" size="30" maxlength="100">
		<br>
		<br>
		<label for="idpassword">Password:</label>
		<input type="text" name="yourpassword" id="idpassword" size="30" maxlength="100">
		<br>
		<br>

		<input type="submit" name="submitbutton" id="submitbutton" value="Login">
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
