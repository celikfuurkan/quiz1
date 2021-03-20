<form action="form4.php" method="post">
    NAME:  <input type="text" name="name" /><br />
    HOW MUCH: <input type="text" name="hm" /><br />
    DRINKS: <br />
    <select multiple name="CHOOSE">
        <option value="COLA">COLA</option>
        <option value="FANTA">FANTA</option>
        <option value="PEPSI">PEPSI</option>
    </select><br />
    <input type="submit" value="SUBMIT" />
</form>

<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
