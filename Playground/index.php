<?

	$location = 'home';?>

<!DOCTYPE html>
<html>
  <head>
    <title>Playground</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  
  </head>
  <body>
	  	<? include 'nav.php' ?>
	  	
	 <div class="container">	
	    		<div class="jumbotron">

	    <h1>Hello, World!</h1>
	    <p>Welcome class of 2013 to Web Server Programming</p>
	    <a class="btn btn-success btn-lg">Learn more</a>
	  </div>
	
	
	<div class="row">
		
		<div class="col-sm-6 col-md-4">
			  <h2>Heading</h2>
	          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          <p><a class="btn btn-primary" href="#">View details »</a></p>
			</div>
			
			<div class="col-sm-6 col-md-4">
	          <h2>Important Points</h2>
	          <ul>
	          	<li>The three main links in the navbar work</li>
	          	<li>They are all centralized in one file</li>
	          	<li>They change apearance to show you which page you are on.</li>
	          	<li>These colunms start as three columns then reduce as the browser shrinks</li>
			  </ul>
	          <p><a class="btn btn-primary" href="#">View details »</a></p>
			</div>
			
			<div class="col-sm-6 col-md-4">
	          <h2>Heading</h2>
	          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          <p><a class="btn btn-primary" href="#">View details »</a></p>
  			</div>
		</div>
	</div>


    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .home").addClass("active");
    	});
    </script>
  </body>
</html>