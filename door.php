<?php

    // Settings
    $login = "admin"; // user on Dahua video door
    $pass = "password"; // password for user on Dahua video door
    $link = "http://192.168.1.45:80/cgi-bin/accessControl.cgi?action=openDoor&channel=1&UserID=101&Type=Remote";
    $curl = "/usr/local/bin/curl"; // path to curl (check it by executing "which curl" as user www)

    echo "<center>";
    if(isset($_GET['act']))
    {
	$link = "$curl --user $login:$pass --digest \"$link\"";
	$result = shell_exec($link);
	echo "$result";
    }
    else
    {
	echo "";
    }

?>
				