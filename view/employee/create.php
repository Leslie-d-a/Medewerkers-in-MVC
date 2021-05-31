<h1>Voeg een medewerker toe</h1>
<form name="create" method="post">
	<label for="">Naam: </label>
	<label><?php echo $error[0]?></label>
	<input name="data[]" type="text">
	<label for="">Leeftijd: </label>
	<label><?php echo $error[1]?></label>
	<input name="data[]" type="number">
	<input type="submit" value="toevoegen">
</form>