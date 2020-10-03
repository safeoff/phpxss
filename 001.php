<a href="./#!-001">TOP</a>
<?php
    $t1 = preg_replace('/"/i', '&quot;', $_POST[t1]);
?>
<form action="" method="post">
    <input type="text" name="t1" value="<?php echo $t1 ?>">
    <!--<input type="text" name="t1" value="<?php echo $t1 ?>">-->
    <input type="submit">
</form>
