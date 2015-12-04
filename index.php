<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Facts Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		<div class="header">
			<div class="container">
				<header>
					<h1 id="fittext1">RANDOM FACTS!</h1>
				</header>
			</div>
		</div>
		<div class="topics">
			<div class="row1">
				<div class="container padding">
					<div class="col-md-12">
						<div class="btn-group-justified">
							<div class="btn-group"><button id ="com" class="btn btn-primary btn-md">COMEDY</button></div>
							<div class="btn-group"><button id ="sp"  class="btn btn-primary btn-md">SPORT</button></div>
							<div class="btn-group"><button id ="his" class="btn btn-primary btn-md">HISTORY</button></div>
							<div class="btn-group"><button id ="ran" class="btn btn-primary btn-md">RANDOM</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="row2">
			<div class="container">			
				<div class="col-md-9">
					<div id="slider">
						<h1 id="fittext2">
							<div id="innerSlider">
							
							</div>
						</h1>
					</div>
				</div>
				<div class="col-md-3 padding">
					<div id="formBox">
						<form action="updatexml.php" method="post">
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
								</div>
								<div class="form-group" id="message">
									<label for="message">Type fact here:</label>
									<textarea class="form-control" id="message" name="message" placeholder="Your fact here"></textarea>
								</div>
								<div class="form-group" >
									<label for="genre">Choose the genre:</label>
									  <select name="genre">
									    <option value="comedy">Comedy</option>
									    <option value="sport">Sport</option>
									    <option value="history">History</option>
									    <option value="random">Random</option>
									  </select>
								</div>

								<button type="submit" id="submit" class="btn btn-default" onsubmit="return false">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		

	
		<div class="bgalt2">
			<div class="container padding">
				<footer>&copy; Robbie Kane - Ian Donnelly - Ben Skerritt<br /></footer>
			</div>
		</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
    <script type="text/javascript">
		$("#fittext1").fitText();
		$("#fittext2").fitText(1.2);
		$("#fittext3").fitText(1.1, { minFontSize: '50px', maxFontSize: '75px' });
	</script>
    
	<!--<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	  });
	});
	-->
	
	<script>
	/*	
			window.onload = initAll;
	    function initAll() {
	      document.getElementById("#submit").onclick = validate;
	    }
	    function validate() {	
			
	        if(document.form.name.length == 0)
	        {
	          window.alert("Please enter your name");
			  		document.getElementById("name").focus();
	          document.getElementById("name").style.borderColor = "red";
	          return false;
	        }
			if (document.genre.length ==  0 )  
			{ 
			window.alert("Please select a genre for your fact");
			document.getElementById("genre").style.borderColor = "red";
	          return false;
	        }
	                  
	        if(document.form-group.email.email.length == 0)
	        {
	          window.alert("Please Enter your Email Address");
			  document.getElementById("email").focus();
	          document.getElementById("email").style.borderColor = "red";
	          return false;
	        }
			  if(document.form.message.value.length == 0)
	        {
	          window.alert("Please enter you fact");
	          document.getElementById("message").focus();
	          return false;
			  }
	
	        return true;
	    }
    */
	
	</script>
	
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#innerSlider").load("comedy.php");
		});
		$("#com").click(function(){
			$("#innerSlider").load("comedy.php");
		});
		$("#his").click(function(){
			$("#innerSlider").load("history.php");
		});
		$("#sp").click(function(){
			$("#innerSlider").load("sport.php");
		});
		$("#ran").click(function(){
			$("#innerSlider").load("random.php");
		});
	</script>
  </body>
</html>