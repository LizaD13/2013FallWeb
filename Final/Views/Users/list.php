<link href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet"/>

<div class ="container">
	
	<h2>Users</h2>
	
	<a href="?action=new">Add Contacts</a>
	
<table class="table table-hover table-bordered table-striped">
	<thead>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Type</th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<? foreach ($model as $rs): ?>
		<tr>
			<td><?=$rs['FirstName']?></td> 
			<td><?=$rs['LastName']?></td>
			<td><?=$rs['UserType']?></td>
			<td>
				<a class="glyphicon .glyphicon-file" href="?action=details&id=<?=$rs['id']?>"/>
				<a class="glyphicon .glyphicon-pencil" href="?action=edit&id=<?=$rs['id']?>"/>
				<a class="glyphicon .glyphicon-trash" href="?action=delete&id=<?=$rs['id']?>"/>
			</td>
		</tr>
			
	<? endforeach ?>
	</tbody>

</table>
</div>

<?function Scriots(){ ?>
	<script src='//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js'></script>
	<script types="text/javascript">
		$(".table").dataTable();
	</script>
<? } ?>
