<div class ="container">
<? foreach ($model as $value): ?>
	<div>
		<?=$value['id']?>
		<?=$value['Name']?>
		<?=$value['Price']?>
		<?=$value['Description']?>
		<?=$value['PictureURL']?>
	</div>
<? endforeach; ?>
</div>