<?php
    $_POST[t1] = htmlspecialchars($_POST[t1], ENT_QUOTES);
    $_POST[t2] = htmlspecialchars($_POST[t2], ENT_QUOTES);
    $_POST[t3] = htmlspecialchars($_POST[t3], ENT_QUOTES);
    $_POST[t4] = htmlspecialchars($_POST[t4], ENT_QUOTES);
    //$_POST[t5] = htmlspecialchars($_POST[t5], ENT_QUOTES);
?>
<form action="" method="post">
    <input type="text" name="t1" value="<?php echo $_POST[t1] ?>"><br>
    <input type="text" name="t2" value="<?php echo $_POST[t2] ?>"><br>
    <input type="text" name="t3" value="<?php echo $_POST[t3] ?>"><br>
    <input type="text" name="t4" value="<?php echo $_POST[t4] ?>"><br>
    <!--<input type="text" name="t5" value="<?php echo $_POST[t5] ?>"><br>-->
    <input type="submit">
</form>
