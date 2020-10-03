<?php
    if(preg_match('/^006/', $_POST[t1])) $t1 = $_POST[t1];
?>
<form action="" method="post">
    <input type="text" name="t1" value="00<?php echo rand(1, 6); ?>">
    <input type="submit"><?php echo $t1 ?>
</form>
