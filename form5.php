<form action="form5.php" method="post">
    <input type="checkbox" name="drink" value = "Fanta"/>Fanta<br />
    <input type="checkbox" name="drink" value = "Cola"/>Cola<br />
	<input type="checkbox" name="drink" value = "Cola"/>Pepsi<br />
    <input type="submit" value="Submit!" />
</form>
<br>
Your CHOOSE:
<?php
echo $_POST['drink'];
?>