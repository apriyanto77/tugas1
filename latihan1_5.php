<html>

    <body>

    tanggal lahir:
<select name = tanggal>
    <option value = 0 selected>tanggal
<?php
    for ($i = 1; $i < 32; $i++)
    echo "<option value = $i>$i";
?>
    </option></select>
    </body>
</html>