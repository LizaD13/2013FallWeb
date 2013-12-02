<div class="container">
	<? $errors = isset($errors) ? $errors : array(); ?>
	<? if(isset($errors) && count($errors)): ?>
		<ul>
		<? foreach ($errors as $key => $value): ?>
			<li><label><?=$key?>:</label> <?=$value?></li>
		<? endforeach; ?>
		</ul>
	<? endif; ?>
	<form action="?action=save" method="post"  class="form-horizontal row">
		<input type="hidden" name="id" value="<?=$model['id']?>" />
		
		<div class="form-group <?=isset($errors['parent_id']) ? 'has-error' : ''?>">
			<label for="parent_id" class="col-sm-2 control-label">id</label>
			<div class="col-sm-10">
				<input type="text" name="parent_id" id="parent_id" placeholder="id" class="form-control " value="<?=$model['parent_id']?>"  />
			</div>
			<span><?=@$errors['parent_id']?></span>
		</div>	
			<select name="keywords_id" id="keywords_id" class="form-control ">
					<? foreach (Keywords::GetSelectListFor(2) as $keywordRs): ?>
						<option value="<?=$keywordRs['id']?>"><?=$keywordRs['Name']?></option>
					<? endforeach; ?>
				</select>
				
		<div class="form-group <?=isset($errors['Name']) ? 'has-error' : ''?>">
			<label for="LastName" class="col-sm-2 control-label">Keyword Name</label>
			<div class="col-sm-10">
				<input type="text" name="Name" id="Name" placeholder="Name" class="form-control " value="<?=$model['Name']?>"  />
			</div>
			<span><?=@$errors['Name']?></span>
		</div>
					
			</div>
		</div>

		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="form-control btn btn-primary" value="Save" />
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(function(){
		$("#keywords_id").val(<?=$model['keywords_id']?>);
	})	
</script>





