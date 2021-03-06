<?
	$pages = array(
		array(
		'url' => 'index.php',
		'section' => 'home',
		'title' => 'Home'
		),
		array(
		'url'=>'links.php',
		'section' => 'links',
		'title' => 'Links'
		),
		array(
		'url'=>'contact.php',
		'section' => 'contact',
		'title' => 'Contact'
		),
	);

	
	$name = $pages[$location];
	$msg = "Hello $name[title]";
?>

<div class="navbar navbar-inverse-fixed-top navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Playground</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    	
    	
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Links</a></li>
      
      <? foreach ($pages as $name => $data): ?>
			<li class="<?=$data['section']?><? if($location == $data['section']) echo "active";?> <a href="<?=$data['url']?>"> <?$data['title']?></a></li>
		<? endforeach; ?>
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li><a href="#">Separated link</a></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
    </ul>
   <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Liza Davidson</a></p>

    
    </ul>
  </div><!-- /.navbar-collapse -->
</div>

<pre class="container">
	<? echo json_encode($pages, null, 1); ?>
</pre>
