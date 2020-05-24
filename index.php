<?php

// dahua-door-www

print "
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
    <title>Dahua door</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
    <link rel=\"stylesheet\" href=\"default.css\" type=\"text/css\">
</head>
<body>
<center>
<center><a href=\"..\">Main page</a><br><br>";

// delete all snapshots
shell_exec("rm snapshots/*");

// download and show new snapshot
print "
<iframe marginwidth=0 marginheight=0 width=800px height=480px scrolling=no frameborder=0 src=snapshot.php></iframe>
<br><br><a href=\"./door.php?act=open_door\" target=result onclick=\"return confirm('Sure?')\"><img src=\"images/open.jpg\" width=70px></a><br>Open door<br>
<iframe id=result name=result src=\"./door.php\" title=results width=100% height=100px frameborder=no></iframe>";

?>