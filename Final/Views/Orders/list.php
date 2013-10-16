<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['shipping']?>
		<?=$value['billing']?>

	</div>
<? endforeach; ?>
</div>