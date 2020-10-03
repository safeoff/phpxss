<?php 
    $t1 = htmlspecialchars($_POST[t1], ENT_QUOTES);
    echo array_keys($_POST[t1])[0];
?>
<form action="" method="post">
<input type="text" name="t1" value="<?php echo $t1 ?>">
    <input type="submit">
</form>
