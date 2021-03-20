<form action="form3.php" method="post">
 NAME: <br/>
 <input type="text" name="name" /><br/>
 AGE: <br/>
 <input type="text" name="surname" /><br/>
  <input type = "radio" name = "x" checked value = "Male">Male
 <input type = "radio" name = "x" value = "Female">Female
 <br>
 <input type="submit" value="SUBMIT" /><br>
</form><br><br>

<pre>
NAME:
<?php
echo $_POST['name'];
?><br>
AGE :
<?php
echo $_POST['surname'];
?><br>
GENDER :
<?php
echo $_POST['x'];
?>
</pre>