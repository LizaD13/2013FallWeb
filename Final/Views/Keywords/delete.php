<h3>
	Are you sure you want to delete
	<?=$model['Name']?>
</h3>
<form action="?action=delete" method="post">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	<input type="submit" value="Delete" class="btn btn-primary" />
	<a href="?action=list">No, you're right.</a>
	
</form>