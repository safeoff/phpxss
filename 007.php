<?php
    $_POST[t1] = htmlspecialchars($_POST[t1], ENT_QUOTES);
    $_GET[t1] = htmlspecialchars($_GET[t1]);
?>
<form action='' method='POST'>
    <input type='text' name='t1' value='<?php echo $_POST[t1]; echo $_GET[t1]; ?>'>
    <input type='submit'>
</form>
