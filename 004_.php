<?php
    $t1 = htmlspecialchars($_POST[t1], ENT_QUOTES);
?>
<p><?php echo $t1 ?></p>
<a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">戻る</a>
