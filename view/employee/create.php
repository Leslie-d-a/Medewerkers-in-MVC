<h1>Voeg een medewerker toe</h1>
<form name="create" method="post">
	<label for="">Naam: </label>
	<label><?php echo $errors[0];?></label>
	<input name="data[]" type="text" value="<?php echo $employee[0];?>">
	<label for="">Leeftijd: </label>
	<label><?php echo $errors[1];?></label>
	<input name="data[]" type="number" value="<?php echo $employee[1];?>">
	<input type="submit" value="toevoegen">
</form>