#!/usr/bin/php

<?
for($i = 0; $i <= 25; $i++){
	$upper[$i] = 0;
	$lower[$i] = 0;
}

for($k = 0; $k <= 9; $k++) $number[$k] = 0;

$file = fopen("./words.txt", "r");
if($file){
	while(($buffer = fgets($file, 4096)) !== false){
		#echo "$buffer";
#		$num = ord(substr($buffer, 0, 1));
		$num = ord(substr($buffer, -3, 1)); #reverse
		if($num >= ord('a') && $num <= ord('z') ){
			$lower[$num - ord('a')] += 1;
		}
		else if($num >= ord('A') && $num <= ord('Z') ){
			$upper[$num - ord('A')] += 1;
		}
		else if($num >= ord('0') && $num <= ord('9') ){
			$number[$num - ord('0')] += 1;
		}
	}
}
for($j=0; $j<=25; $j++){
	$up = chr(65 + $j);
	$lo = chr(97 + $j);
	echo "$up = $upper[$j]\n"; 
	echo "$lo = $lower[$j]\n";
}
for($l=0; $l<=9; $l++){ 
	$nu = chr(48+$l); 
	echo "$nu = $number[$l]\n";
}
fclose($file);
?>
