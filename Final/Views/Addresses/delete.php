<h3>
	Are you sure you want to delete
	<?=$model['street']?> <?=$model['city']?> <?=$model['state']?>
</h3>
<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<input type="submit" value="Delete" class="btn btn-primary" />
	<a href="?action=list">No, your right.</a>
	
</form>