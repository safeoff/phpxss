<?php
    if(isset($_POST[h1])) {
        $h1 = preg_split('/\t/', $_POST[h1]);
        echo $h1[6];
    }
?>
<form action="" method="post">
    <input type="hidden" name="h1" value="005	_01	rel	post	167139019231	Array_005.php	005	005	.	__\>">
    <input type="submit">
</form>
