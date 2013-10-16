<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['email_type']?>
	</div>
<? endforeach; ?>
</div>