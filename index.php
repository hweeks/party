<?php session_start() ?>
<html>
	<head>
   	<!--Select styles, scripts, and included Google OpenSans-->
		<title>Join our party!</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="JQuery1.10.2.js"></script>
         <script type="text/javascript">
                (function ($,window,document,undefined) {
                        $(document).ready(function() {
                                $(".container,.submissionarea").show();
                                $(".submissionarea").on("click","#cancelbutton",function() {
                                        $(".container,.submissionarea").hide();
                                        $("#openform").show();
                                });
                                $("#openform").click(function(e) {
                                        e.preventDefault();
                                        $(".container,.submissionarea").show();
                                        $("#openform").hide();
                                });
                        });
                })(jQuery,window,document);
         </script>      
	</head>

	<body>
   <!--I am using a simple form that will call a php file once I've made it-->
   <form action="validator.php" method="post">
    	<!--The whole input/submission area is going to be done with two containers, one for the input fields, one for the submit and cancel buttons.-->
      <div class="container">	
   			<div id="maintitle">JOIN OUR PARTY!</div>
            <!--These are the conatiners for input-->
   			<div id="emailinputcontainer" <?php if(!empty($_SESSION['errors']['email'])){echo 'class="error"';} ?> >
               <div id="emailinputicon">@</div>               
   				<input id="inputformemail" name="email" >
                  <?php if(!empty($_SESSION['errors']['email'])): ?>
                     <?php foreach($_SESSION['errors']['email'] as $erroremail): ?>
                        <div class="errorpopup"><?=$erroremail ?></div>
                     <?php endforeach ?>
                  <?php endif ?>               
   			</div>
   			<div id="usernameinputcontainer" <?php if(!empty($_SESSION['errors']['user'])){echo 'class="error"';} ?> >
               <div id="usernameinputiconhead"></div>
               <div id="usernameinputiconbody"></div>
   				<input id="inputformuser" name="user">
                  <?php if(!empty($_SESSION['errors']['user'])): ?>
                     <?php foreach($_SESSION['errors']['user'] as $erroruser): ?>
                        <div class="errorpopup"><?=$erroruser ?></div>
                     <?php endforeach ?>
                  <?php endif ?>   
   			</div>
   			<div id="passwordinputcontainer" <?php if(!empty($_SESSION['errors']['password'])){echo 'class="error"';} ?> >
               <div id="passwordinputiconbar"></div>
               <div id="passwordinputiconlock"></div>               
   				<input id="inputformpassword" name="password">
                  <?php if(!empty($_SESSION['errors']['password'])): ?>
                     <?php foreach($_SESSION['errors']['password'] as $errorpass): ?>
                        <div class="errorpopup"><?=$errorpass ?></div>
                     <?php endforeach ?>
                  <?php endif ?>
   			</div>
		</div>
		<div class="submissionarea">
            <!--These are the buttons-->
   				<div id="cancelbutton">Cancel</div>
   				<input type="submit" value="Sign Up" id="signupbutton">
		</div>
   <button id="openform">Show Form Please</button>   
	</form> 
	</body>
</html>