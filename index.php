<html>
	<head>
   	<!--Select styles, scripts, and included Google OpenSans-->
		<title>Join our party!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
	</head>

	<body>
   <!--I am using a simple form that will call a php file once I've made it-->
   <form action="" method="post">
    	<!--The whole input/submission area is going to be done with two containers, one for the input fields, one for the submit and cancel buttons.-->
      <div class="container">	
   			<div id="maintitle">JOIN OUR PARTY!</div>
            <!--These are the conatiners for input-->
   			<div id="emailinputcontainer">
   				<input id="inputform" name="email" >
   			</div>
   			<div id="usernameinputcontainer" >
   				<input id="inputform" name="user">  				
   			</div>
   			<div id="passwordinputcontainer" >
   				<input id="inputform" name="password">  				
   			</div>
		</div>
		<div class="submissionarea">
            <!--These are the buttons and their div-->
   			<div id="buttoncontainer">
   				<a href="#" id="cancelbutton">Cancel</a>
   				<input type="submit" value="Sign Up" id="signupbutton">
   			</div>
		</div>
	</form> 
	</body>
</html>