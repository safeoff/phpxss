<a href="./#ba010_">TOP</a>
<?php
    session_start();
    $_SESSION[t1] = htmlspecialchars($_POST[t1]);
?>
<p><?php echo $_SESSION[t1] ?></p>
<a href="010.php?mode=back">戻る</a>
