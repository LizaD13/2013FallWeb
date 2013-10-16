<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['number']?>
		<?=$value['phone_type']?>
	</div>
<? endforeach; ?>
</div>