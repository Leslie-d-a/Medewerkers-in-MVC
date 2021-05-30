<h1>Persoon wijzigen</h1>
<form name="update" method="post" action="<?=URL?>employee/update">
	<input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
	<input type="text" name="name" value="<?=$employee["name"] ?>">
	<input type="number" name="age" value="<?=$employee["age"] ?>">
	<input type="submit" value="update">
</form>