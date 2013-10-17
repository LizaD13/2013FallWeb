<? include 'inc/_global.php'; ?>

<?
	$conn = GetConnection();
	$result = $conn->query('SELECT * FROM 2013Fall_Keywords');
	$rs = $result->fetch_assoc();
	
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

  </head>
  <body>
   <div class"container"><h1>This is the final</h1>
    
    <?
    
    	$msg = 'Hello ';
		$name = 'Liza';
		include 'something.php';
	?>
	<pre>
		<? print_r($rs); ?>
	</pre>
	<span class="label label-success"><?= $msg . $name ?></span>
	</div> 
	
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>