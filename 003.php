<?php
    $t1 = preg_replace('/&/i', '&amp;', $_POST[t1]);
    $t1 = preg_replace('/"/i', '&quot;', $t1);
?>
<script>
    var t1 = "<?php echo $t1 ?>"
</script>
<form action="" method="post">
    <input type="text" name="t1" value="">
    <input type="submit">
</form>
