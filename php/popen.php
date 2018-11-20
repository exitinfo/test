#!/usr/bin/php

<?
#@extract($_GET);
#$para = $_REQUEST['para'];
#$name = $_REQUEST['name'];
#$_SERVER['argv'][1] = $_GET['name'];
$handle = popen("ls -aFl /root", "r");
#$read = fread($handle, 2096);
#echo $read;
$co = 0;
$dco = 0;
$fco = 0;
if($handle){
	while(($buffer = fgets($handle, 4096)) !== false){
	#	echo "$buffer";
		$result=explode(" ", $buffer);
		$con = 0;
		$count = count($result);
		$ch[$co] = $result[0];
		if($co >= 3){	
			if(substr($ch[$co], 0, 1) == "d") $dco++;
			else if(substr($ch[$co], 0, 1) == "-") $fco++;
		}
		for($i=1; $i<$count; $i++){
			if($result[$i] <> NULL){
				$con = $con + 1;
				if($con == 4){
					$nu[$co] = $result[$i];
					#echo "$nu\n";
				}
				else if($con == 8){
					$rm = substr($result[$i], 0, -1);
					$dir[$co] = $rm;
					#echo "$dir\n";
				}
			}
		}
		$co++;
		#echo "$dir\n";	
		#echo "$result[0]\n";
	}
	echo "directory: $dco, file: $fco\n";
	for($j=3; $j<$co; $j++){
		echo "$dir[$j] $nu[$j] $ch[$j]\n";
	}

}

pclose($handle);
?>
