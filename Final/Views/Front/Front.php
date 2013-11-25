<!DOCTYPE html>
<head>
	<title>My Website-</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="jumbotron.css" rel="stylesheet">
	<style>
		body {
			padding-top: 70px;
		}
	</style>

</head>

<body style="background-color:#DDDDDD;">
	<header>

		<div class="container">
			<div>
				<h1 id="navbar" style=" color:#000066; font-family:Helvetica, sans-serif; padding-bottom:50px; padding-left:125px; ">Catalog</h1>
			</div>
		</div>
	</header>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../Front/">Home</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="../Front/">All Products</a>
							</li>
							<li>
								<a href="#"> Face </a>
							</li>
							<li>
								<a href="#"> Hair </a>
							</li>
							<li>
								<a href="#"> Body </a>
							</li>
							<li>

						</ul>
					</li>
				</ul>
				<form class="navbar-text pull-right">
					Signed in as
					<a class="navbar-link" href="#"> Liza Davidson </a>
				</form>
			</div>
		</div>
	</nav>

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
		.container2 {
			padding-right: 250px;
			padding-left: 250px;
		}
		
		.description {
			font-size:16px; 
			font-style: italic;
			padding-top:5px;
		}


	</style>

	<div class="container2">
		<div >
			<?foreach($model as $item): ?>
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=1&amp;format=dialog" data-toggle="modal" data-target="#myModal"> 
								<img id="pic" src= "<?=$item["PictureURL"]?> " alt= "Tiossan Body Cream" class= "img-thumbnail" style= "width: 180px; height: 180px;"> 
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

</body>