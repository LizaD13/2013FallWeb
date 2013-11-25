<div id="container">
	<div id="category-list";
		<ul data-bind="foreach: categories">
			<li class="nav nav-pills">
				<a href="#" data-bind="text: Name"></a>
			</li>
		</ul>
	</div>
	
	<div id="item-list">
		
	</div>
	
	<div id="shopping-cart-list">
		
	</div>
</div>

<script type="text/html" id="shopping-cart-template">
	<span class="glyphicon glyphicon-shopping-cart"></span>
	Cart
	<span class="badge">0</span>
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
			currentCategory: ko.observable(),
			
			selectCategory: function(){
				vm.currentCategory(this);
			}
		};
		ko.applyBindings(vm);
		$.getJSON('?action=categories&format=json', nukk, function(results){
			vm.categories(results.model);
		})
	});
	</script>
<? } ?>