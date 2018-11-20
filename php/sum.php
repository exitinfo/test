#!/usr/bin/php

<?

$score = array(array(88, 98, 96, 77, 63), array(86, 77, 66, 86, 93), array(74, 83, 95, 86,97));
$sum = [0, 0, 0];
for($i = 0; $i < 3; $i++){
	for($j = 0; $j < 5; $j++){
		$sum[$i] = $sum[$i] + $score[$i][$j];
	}
}
$avg[0] = $sum[0]/5;
$avg[1] = $sum[1]/5;
$avg[2] = $sum[2]/5;
echo $sum[0]."\n";
echo $sum[1]."\n";
echo $sum[2]."\n";
echo "$avg[0], $avg[1], $avg[2]\n";
?>
