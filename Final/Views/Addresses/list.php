<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['addresses']?>
		<?=$value['address_type']?>
		<?=$value['city']?>
		<?=$value['state']?>
		<?=$value['zip']?>
	</div>
<? endforeach; ?>
</div>