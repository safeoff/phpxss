<?php
    $t1 = htmlspecialchars($_POST[t1], ENT_QUOTES);
    $t2 = htmlspecialchars($_POST[t2], ENT_QUOTES);
    $t3 = htmlspecialchars($_POST[t3], ENT_QUOTES);
    $t4 = htmlspecialchars($_POST[t4], ENT_QUOTES);
    $t5 = htmlspecialchars($_POST[t5], ENT_QUOTES);
?>
<form action="" method="post">
    <input type="text" name="t1" value="<?php echo $t1 ?>"><?php echo $t1 ?><br>
    <input type="text" name="t2" value="<?php echo $t2 ?>"><?php echo $t2 ?><br>
    <input type="text" name="t3" value="<?php echo $t3 ?>"><?php echo $t3 ?><br>
    <input type="text" name="t4" value="<?php echo $t4 ?>"><?php echo $t4 ?><br>
    <!--<input type="text" name="t5" value="<?php echo $t5 ?>">--><?php echo $_POST[t5] ?><br>
    <input type="submit">
</form>
