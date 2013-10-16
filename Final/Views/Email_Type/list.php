<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['personal']?>
		<?=$value['work']?>

	</div>
<? endforeach; ?>
</div>