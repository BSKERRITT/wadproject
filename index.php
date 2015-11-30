<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
			<h1>INTERESTING FACTS!</h1>
			<h2>Welcome to our website that gives you unusual facts</h2>
		</div>
	</div>
	<div class="topics">
		<div class="row1">
			<div class="container padding">
				<div class="col-md-12">
					<div class="btn-group-justified">
						<div class="btn-group"><a href="#" target="_blank" class="btn btn-primary btn-md">Comedy</a></div>
						<div class="btn-group"><a href="#" target="_blank" class="btn btn-primary btn-md">Sport</a></div>
					  <div class="btn-group"><a href="#" target="_blank" class="btn btn-primary btn-md">History</a></div>
						<div class="btn-group"><a href="#" target="_blank" class="btn btn-primary btn-md">Random</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="row2">
			<div class="container">			
				<div class="col-md-9">
					<div id="slider">
						<div id="innerSlider">
							<?php
								// Load the XML source
								$xml = new DOMDocument;
								$xml->load('facts.xml');
								$xsl = new DOMDocument;
								$xsl->substituteEntities = true; 
								$xsl->load('random.xsl');
								// Configure the transformer
								$proc = new XSLTProcessor;
								$proc->importStyleSheet($xsl); // attach the xsl rules
								
								echo $proc->transformToXML($xml);
								?>
							</div>
						<button>Start Animation</button>
					</div>
				</div>
				<div class="col-md-3 padding">
						<form role="form">
							<div class="form-group">
								<label for="name">Name:</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Your name here"/>
							</div>
							<div class="form-group">
								<label for="message">Type fact here:</label>
								<textarea class="form-control" id="message" name="message" placeholder="Your fact here"></textarea>
							</div>
							<div class="form-group">
								<label for="genre">Choose the genre:</label>
								  <select name="genre">
								    <option value="comedy">Comedy</option>
								    <option value="sport">Sport</option>
								    <option value="history">History</option>
								    <option value="random">Random</option>
								  </select>
							</div>
							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"/>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
									
						</form>
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
    
	<script>
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
	
	
	window.onload = initAll;
    function initAll() {
      document.getElementById(".btn-default").onclick = validate;
    }
    function validate() {	
		
        if(document.form.name.value.length == 0)
        {
          window.alert("Please enter your name");
		  		document.getElementById("name").focus();
          document.getElementById("name").style.borderColor = "red";
          return false;
        }
		if (document.form.genre.value.length ==  0 )  
		{ 
		window.alert("Please select a genre for your fact");
		document.getElementById("genre").style.borderColor = "red";
          return false;
        }
                  
        if(document.form.email.value.length == 0)
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
    
	
	</script>
  </body>
</html>