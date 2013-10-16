<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['quantity']?>
	</div>
<? endforeach; ?>
</div>