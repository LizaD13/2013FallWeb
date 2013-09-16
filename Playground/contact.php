<?

	$location = 'contact';?>

<!DOCTYPE html>
<html>
  <head>
    <title>Playground</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

  </head>
  <body>
	  	<? include 'nav.php' ?>
	
	 <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .contact").addClass("active").fadeOut().fadeIn();
    	});
    </script>
</body>
</html>