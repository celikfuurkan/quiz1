<form action="form1.php" method="post">
 NAME: <br/>
 <input type="text" name="name" /><br/>
 SURNAME: <br/>
 <input type="text" name="surname" /><br/>
 <input type="submit" value="SUBMIT" /><br>
</form><br><br>

<?php
echo $_POST['name'];
?><br>
<?php
echo $_POST['surname'];
?>