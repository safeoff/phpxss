<?php
    $_GET[t1] = htmlspecialchars($_GET[t1]);
    $_GET[t1] = preg_replace('/accesskey/i', '#', $_GET[t1]);
?>
<form action='' method='GET'>
    <input type='text' name='t1' value='<?php echo $_GET[t1]; ?>'>
    <input type='submit'>
</form>
