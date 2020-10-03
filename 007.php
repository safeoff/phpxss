<?php
    $t1 = preg_replace('/script|img|svg|a|on/i', '#', $_POST[t1]);
?>
<form action="" method="post">
    <input type="text" name="t1" value="">
    <input type="submit"><?php echo $t1 ?>
</form>
