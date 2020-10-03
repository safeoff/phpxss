<a href="./#em009">TOP</a>
<?php
    $t1 = preg_replace('/script|img|svg|a|on/i', '#', $_POST[t1]);
?>
<form action="" method="post">
    <input type="text" name="t1" value="<?php echo $t1 ?>">
    <input type="submit">
</form>
