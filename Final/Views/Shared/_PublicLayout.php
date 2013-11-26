<!DOCTYPE html>
<html>
  <head>
    <title>My Website - <?=@$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>
  
  <body style="background-color:#DDDDDD;">
  <div class="container">	
  	<header>
  		<h1>My Website</h1>
  	</header>
			 <div class="navbar navbar-default" role="navigation">
   			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".nav-c">
			    	<span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
		      	<a class="navbar-brand" href="#">Home</a>
			</div>
		
			<div class="collapse navbar-collapse nav-c">
	            <ul class="nav navbar-nav">
						<li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">body</a></li>
				          <li><a href="#">hair</a></li>
				          <li><a href="#">face</a></li>
				        </ul>
				      </li><li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account Settings <b class="caret"></b></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Account Settings</a></li>
				        </ul>
				      </li>
      			</ul>
				<p class="navbar-text pull-right"> <a href="#" class="navbar-link">Cart</a></p>
			</div>
		</div>
	</div>

		</div>
	</header>

	

	<style>
		#pic {
			float: left;
			margin-top: 12px;
		}
		.leftText {
			position: relative;
			left: 10px;
		}
		#left {
			float: right;
		}
		.content {
			padding-right: 250px;
			padding-left: 250px;
		}
		
		.description {
			font-size:16px; 
			font-style: italic;
			padding-top:5px;
		}


	</style>

		<div class="content">
			<?foreach($model as $item): ?>
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=1&amp;format=dialog" data-toggle="modal" data-target="#myModal"> 
								<img id="pic" src= "<?=$item["PictureURL"]?> class= "img-thumbnail" style= "width: 180px; height: 180px;"> 
								</a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 "><?=$item["Name"]?></h3>
								
								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $<?=$item["Price"]?>
								</div>
								<div class="description">
									<?=$item["Description"]?>
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=1&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
			<?endforeach;?>
		</div>

		

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="script/main.js"></script>
		 <? if(function_exists('Scripts')) Scripts(); ?>

</body>
	<? include $view; ?>


</html>

