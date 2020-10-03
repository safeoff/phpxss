<a href="./#ie008">TOP</a>
<?php
    $_POST[h1] = htmlspecialchars($_POST[h1]);
    $_POST[h1] = preg_replace('/accesskey/i', '#', $_POST[h1]);
?>
<meta http-equiv="x-ua-compatible" content="IE=10">
<form action='' method='POST'>
    <input type='hidden' name='h1' value='<?php echo $_POST[h1]; ?>'>
    <input type='submit'>
</form>
