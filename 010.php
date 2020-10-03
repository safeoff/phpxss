<form action="010_.php" method="post">
    <input type="text" name="t1" id="t1" value="">
    <input type="submit">
</form>
<?php
    session_start();
    if($_GET[mode]=='back') {
        echo "<script>document.getElementById(\"t1\").value ='";
        echo $_SESSION[t1];
        echo "'</script>";
    }
?>
