<?php
// Create the credentials file with hardcoded values (executed once)
$file = fopen("credentials.txt", "w");
fwrite($file, "hui,ldyistopuser22880012\n");
fclose($file);

echo "Default credentials added: Username is 'hui' and Password is 'ldyistopuser22880012'.";
?>