<?php
    session_start();
    $_SESSION[t1] = $_POST[t1];
    $t1 = htmlspecialchars($_SESSION[t1], ENT_QUOTES);
?>
<p><?php echo $t1 ?></p>
<a href="010.php?mode=back">戻る</a>
