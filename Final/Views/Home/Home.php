<div id="container">
	<div id="category-list">
		<ul class="nav nav-pills" data-bind="foreach: categories">
			<li>
				<a href="#" data-bind="text: Name, click: $root.categoryClicked">Face</a>
			</li>
			<li>
				<a href="#" data-bind="text: Name">Body</a>
			</li>
			<li>
				<a href="#" data-bind="text: Name">Hair</a>
			</li>
		</ul>
	</div>
	
	<div data-bind="foreach: products">
		<div class="col-sm-3">
			<div class="well">
				<h5 data-bind="text: Name"></h5>
				<a data-bind="attr: { href: '?action=addToCart&id=id=' + id} "></a>
			</div>
		</div>	
	</div>
	
</div>

<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
	<a href="#">Cart</a>
	<span class="badge"> <? $cart = $_SESSION['cart']; echo count($cart); ?> </span>
</script>

 <? function Scripts(){ ?>
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	
	<script type="text/javascript">
	$(function(){
		$("#shopping-cart").html($("#shopping-cart-template").html());
		
		var vm = {
			categories: ko.observableArray(),
			products: ko.observableArray(),
				
				categoryClicked: function(){
				$.getJSON('?action=products&format=json', { categoryId: this.id },function(results){
					vm.products(results.model);
			}
			//currentCategory: ko.observable(),
			
			//selectCategory: function(){
				//vm.currentCategory(this);
			}
		};
		ko.applyBindings(vm);
	
		$.getJSON('?action=categories&format=json',function(results){
			vm.categories(results.model);
		})
	});
	</script>
<? } ?>