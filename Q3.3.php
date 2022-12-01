<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hi I am Bhavesh, roll no A002 from batch 1 & currently pursuing MCA from MPSTME\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "content written in file"
?>