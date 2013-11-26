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
		
		<div class="form-group <?=isset($errors['street']) ? 'has-error' : ''?>">
			<label for="street" class="col-sm-2 control-label">Street</label>
			<div class="col-sm-10">
				<input type="text" name="street" id="street" placeholder="street" class="form-control " value="<?=$model['street']?>"  />
			</div>
			<span><?=@$errors['street']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['city']) ? 'has-error' : ''?>">
			<label for="city" class="col-sm-2 control-label">City</label>
			<div class="col-sm-10">
				<input type="text" name="city" id="city" placeholder="city" class="form-control " value="<?=$model['city']?>"  />
			</div>
			<span><?=@$errors['city']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['state']) ? 'has-error' : ''?>">
			<label for="state" class="col-sm-2 control-label">State</label>
			<div class="col-sm-10">
				<input type="state" name="state" id="state" placeholder="state" class="form-control "  value="<?=$model['state']?>" />
			</div>
			<span><?=@$errors['state']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['zip']) ? 'has-error' : ''?>">
			<label for="zip" class="col-sm-2 control-label">Zip</label>
			<div class="col-sm-10">
				<input type="zip" name="zip" id="zip" placeholder="zip" class="form-control "  value="<?=$model['zip']?>" />
			</div>
			<span><?=@$errors['zip']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['Address_Type']) ? 'has-error' : ''?>">
			<label for="Address_Type" class="col-sm-2 control-label">Address Type</label>
			<div class="col-sm-10">
				<select name="Address_Type" id="Address_Type" class="form-control ">
					<? foreach (Keywords::GetSelectListFor(3) as $keywordRs): ?>
						<option value="<?=$keywordRs['id']?>"><?=$keywordRs['Name']?></option>
					<? endforeach; ?>
				</select>	
			</div>
			<span><?=@$errors['Address_Type']?></span>
		</div>
		
		<div class="form-group <?=isset($errors['Users_id']) ? 'has-error' : ''?>">
			<label for="Users_id" class="col-sm-2 control-label">User Type</label>
			<div class="col-sm-10">
				<select name="Users_id" id="Users_id" class="form-control ">
					<? foreach (Users::Get() as $keywordRs): ?>
						<option value="<?=$keywordRs['id']?>"><?=$keywordRs['LastName']?></option>
					<? endforeach; ?>
				</select>	
			</div>
			<span><?=@$errors['Users_id']?></span>
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
		$("#Address_Type").val(<?=$model['Address_Type']?>);
		$("#Users_id").val(<?=$model['Users_id']?>);
	})	
</script>





