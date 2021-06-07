<h1>Persoon wijzigen</h1>
<form name="update" method="post">
	<label for="">Naam: </label>
	<label><?php echo $errors[1];?></label>
	<input name="data[]" type="text" value="<?php echo $employee['name'];?>">
	<label for="">Leeftijd: </label>
	<label><?php echo $errors[2];?></label>
	<input name="data[]" type="number" value="<?php echo $employee['age'];?>">
	<input type="submit" value="toevoegen">
</form>