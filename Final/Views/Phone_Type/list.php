<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['home']?>
		<?=$value['work']?>
		<?=$value['cell']?>

	</div>
<? endforeach; ?>
</div>