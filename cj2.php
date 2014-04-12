<?php

$fr = fopen("php://stdin", "r");
$fw = fopen("php://stdout", "w");

fscanf($fr, "%d", $testcases);


for($i=0;$i<$testcases;$i++){

	fscanf($fr, "%f %f %f", $r1, $r2, $r3);
	
	$prevcookrate = 2;
	$nextcookrate = $r2+2;
	$time = $r1/$prevcookrate;
	$prevtime = $r3/$prevcookrate;
	$nexttime = $time + $r3/$nextcookrate;
	
	if($prevtime>$nexttime){
	
		while ($prevtime > $nexttime) {
		
			$prevcookrate = $nextcookrate;
			$nextcookrate += $r2;
		
			$time += $r1/$prevcookrate;
		
			$prevtime = $nexttime;
			$nexttime = $time + $r3/$nextcookrate;
			
		}
		
		echo $prevtime.'\n';

	}
	else{ echo $prevtime.'\n';}
}


fclose($fr);
fclose($fw);

?>
