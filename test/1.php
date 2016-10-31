<?php
$myfile = fopen("E:\\log\\1.txt",'w');

 
fwrite($myfile, $txt);
 
fclose($myfile);
?>