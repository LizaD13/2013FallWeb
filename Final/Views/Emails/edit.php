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
		
		<div class="form-group <?=isset($errors['Email_Address']) ? 'has-error' : ''?>">
			<label for="FirstName" class="col-sm-2 control-label">Email Address</label>
			<div class="col-sm-10">
				<input type="text" name="Email_Address" id="Email_Address" placeholder="Email_Address" class="form-control " value="<?=$model['Email_Address']?>"  />
			</div>
			<span><?=@$errors['Email_Address']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['keywords_id']) ? 'has-error' : ''?>">
			<label for="keywords_id" class="col-sm-2 control-label">Address Type</label>
			<div class="col-sm-10">
				<select name="keywords_id" id="keywords_id" class="form-control ">
					<? foreach (Keywords::GetSelectListFor(3) as $keywordRs): ?>
						<option value="<?=$keywordRs['id']?>"><?=$keywordRs['Email_Type']?></option>
					<? endforeach; ?>
				</select>
				
				
			</div>
			<span><?=@$errors['keywords_id']?></span>
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





