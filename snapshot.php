<?php

############
# Settings #
############
$url = "http://192.168.1.45/cgi-bin/snapshot.cgi"; // url to Dahua
$login = "admin"; // user on Dahua able to view  snapshot
$pass = "password"; // password for user on Dahua able to view snapshot
$curl = "/usr/local/bin/curl"; // path to curl (check it by executing "which curl" as user www)

$command = "$curl --user $login:$pass --digest \"$url\" -o snapshots/doorstation.jpg";
shell_exec("$command");
print "<img src=snapshots/doorstation.jpg>
<meta http-equiv=refresh content=3>";

?>