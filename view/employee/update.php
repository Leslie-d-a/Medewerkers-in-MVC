<h1>Persoon wijzigen</h1>
<form name="update" method="post">
	<input type="hidden" name="data[]" value="<?=$employee["id"] ?>"/>
	<label><?php echo $error[1]?></label>
	<input type="text" name="data[]" value="<?=$employee["name"] ?>">
	<label><?php echo $error[2]?></label>
	<input type="number" name="data[]" value="<?=$employee["age"] ?>">
	<input type="submit" value="update">
</form>