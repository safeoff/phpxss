<?php
    $_POST[t1] = htmlspecialchars($_POST[t1]);
    $_POST[t1] = preg_replace('/accesskey/i', '#', $_POST[t1]);
?>
<meta http-equiv="x-ua-compatible" content="IE=10">
<form action='' method='POST'>
    <input type='text' name='t1' value='<?php echo $_POST[t1]; ?>'>
    <input type='submit'>
</form>
