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
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=1&amp;format=dialog" data-toggle="modal" data-target="#myModal"> 
								<img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/t/i/tiossan_bodycream_fatale_900x900.jpg" alt= "Tiossan Body Cream" class= "img-thumbnail" style= "width: 180px; height: 180px;"> 
								</a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">Tiossan Body Cream</h3>
								<div>
									Item Number #:987
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $38.00
								</div>
								<div class="description">
									Luxurious French inspired body cream. Use daily for ulitmate moisture
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
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=6&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/m/o/moltonbrown_blackpepperbodywash_900x900.jpg" alt="Molton Brown Black Pepper Body Wash" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">Molton Brown Black Pepper Body Wash</h3>
								<div>
									Item Number #:654
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $30.00
								</div>
								<div class="description">
									Invigorating body wash. Improvers circulation, clears acne ridden skin complete with a rejuvinating tingling sensation
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=6&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=9&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/i/t/itsa10_miracleleavein_4oz_900x900.jpg" alt="It's a 10 Miracle Leave in Product" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">It's a 10: Miracle Leave in Product</h3>
								<div>
									Item Number #:321
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $19.99
								</div>
								<div class="description">
									An amazing leave in conditioner that detagles, protects, smooths and softens you hair.
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=9&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=11&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/b/a/baindeterre_macadamiashampoo_900x900.jpg" alt="Bain de Terre Shampoo" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">Bain de Terre Macadamia Nourishing Shampoo </h3>
								<div>
									Item Number #:123
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $12.00
								</div>
								<div class="descripton">
									The perfect shampoo for fine hair. Light-weight, ultra nourishing and doesn't make hair greasy or oily
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=11&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/b/a/baindeterre_macadamiaconditoner_900x900.jpg" alt="Bain de Terre Conditioner" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">Phone Case</h3>
								<div>
									Item Number #:456
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $13.00
								</div>
								<div class="description">
									The perfect conditioner for fine hair. Light-weight, ultra nourishing and doesn't make hair greasy or oily
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/t/h/thebalm_hotmamablushshadow_900x900.jpg" alt="The Balm Blush" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">The Balm Hot Mamma Blush</h3>
								<div>
									Item Number #:789
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $20.00
								</div>
								<div class="description">
									A multi-faceted blush combined with a luminizer for all day color and sparkle. Try it as an eyeshadow too!
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal"> <img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/t/h/thebalm_nudetudepalette_900x900.jpg" alt="The Balm Eyeshadow" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">The Balm Nude 'Tude Eyeshadow Pallete</h3>
								<div>
									Item Number #:0987
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $36.00
								</div>
								<div class="description">
									This pallate will take you from day to night! Use during the day to create natural beauty or try some darker shades at night for a perfect smoky eye
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>
		<div id="myModal" class="modal fade" data-backdrop="static"></div>
		
		<div >
			<ul class="list-group">
				<div class="row">
					<li class="list-group-item">
						<div class="media">
							<a class="pull-left" href="?action=details&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal"> 
								<img id="pic" src="http://www.birchbox.com/shop/media/catalog/product/cache/1/image/460x/9df78eab33525d08d6e5fb8d27136e95/e/y/eyeko_skinnyliquideyeliner_black_900x900_1.jpg" alt="Eyeko Eyeliner" class="img-thumbnail" style="width: 180px; height: 180px;"> </a>
							<br>
							<div class="media-body">
								<h3 class="media-heading" style=" color:#000066 ">Eyeko Skinny Liquid Eyeliner</h3>
								<div>
									Item Number #:0654
								</div>

								Rating:
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<div style="font-size:18px;">
									Price: $16.00
								</div>
								<div class="description">
									A must have eyeliner for every girl. Whether you're new to liquid eyeliner or a master of the cat eye, this eyelines will be your new best friend
								</div>
								<br>
								<br>
							</div>
							<button type="button" id="left" class="btn btn-success" href="?action=verify&amp;id=2&amp;format=dialog" data-toggle="modal" data-target="#myModal">
								Add to Cart
							</button>
						</div>
						<br>
					</li>
				</div>
			</ul>
		</div>

		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="script/main.js"></script>

</body>