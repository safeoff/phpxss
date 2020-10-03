<?php
    if(preg_match('/^006/', $_POST[t1])) $t1 = $_POST[t1];
?>
<form action="" method="post">
    <?php echo '<input type="text" name="t1" value="00'; echo rand(1,6); echo '">'; ?>
    <input type="submit"><?php echo $t1 ?>
</form>
