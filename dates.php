<?php 
echo date_default_timezone_get();
date_default_timezone_set('UTC');

$stamp = mktime(0, 0, 0, 02, 27, 2004);

echo date('l', $stamp);

echo "<br />";

echo date('r');

$theDate = getdate();
printf("%d -< minutes", $theDate['minutes']);

printf("%s -< the day", $theDate['wday']);