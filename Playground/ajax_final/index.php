<!doctype html>
<html lang="en">
<?include_once 'search.php'?>

<head>
	
  <meta charset="utf-8">
  <title>Ajax Final</title>
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> 
</head>
<body> 

	<form action='' method='post'>
		<p><label>Zip Code:</label><input type='text' name='*' value='' class='auto'></p>
	</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "search.php",
		minLength: 2
	});				

});
</script>
</body>
</html>