<a href="./#ty007">TOP</a>
<?php
    $_POST[h1] = htmlspecialchars($_POST[h1], ENT_QUOTES);
    $_GET[h1] = htmlspecialchars($_GET[h1]);
?>
<form action='' method='POST'>
    <input type='hidden' name='h1' value='<?php echo $_POST[h1]; echo $_GET[h1]; ?>'>
    <input type='submit'>
</form>
