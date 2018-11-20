#!/usr/bin/php

<?
#$html = popen("wget -O index.html http://cslab.jbnu.ac.kr/", "r");
	
$file = fopen("./index.html", "r");
$read = fread($file, 10000);

preg_match_all('/\w+/', $read, $matches);

print_r($matches[0]);
$si = sizeof($matches[0]);
echo "$si\n";
#pclose($html);
fclose($file);
?>
