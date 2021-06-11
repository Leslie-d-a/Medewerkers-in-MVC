<form method="POST" onsubmit="return confirm('weet je zeker dat je dit persoon wil verwijderen?')">
    <span><?= $employee['name'].', '. $employee['age'] .' jaar'?></span>
    <input type="submit" value="verwijderen">
</form>

