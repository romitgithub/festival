<?php


$fr = fopen("php://stdin", "r");
$fw = fopen("php://stdout", "w");

fscanf($fr, "%d", $testcases);

$array1 = array();
$array2 = array();

for ($i=0; $i < $testcases; $i++) { 
	
	fscanf($fr, "%d", $row1);

	for ($j=0; $j < 4; $j++) { 

		fscanf($fr, "%d %d %d %d", $r1, $r2,$r3, $r4);

		if ($j==($row1-1)) {
				array_push($array1, $r1,$r2,$r3,$r4);
			}	

	}

	fscanf($fr, "%d", $row2);

	for ($k=0; $k < 4; $k++) { 

		fscanf($fr, "%d %d %d %d", $s1, $s2,$s3, $s4);

		if ($k==($row2-1)) {
				array_push($array2, $s1,$s2,$s3,$s4);
			}	

	}



	$result = array_intersect($array1, $array2);

	$chknum = count($result);

	$case = $i+1;

	if ($chknum==0) {
		echo "Case #$case: Bad Magician!";
	}
	if ($chknum>1) {
		echo "Case #$case: Volunteer Cheated!";	
	}
	if ($chknum==1) {
		echo "Case #$case: $result[0]";
	}

}

 
fclose($fr);
fclose($fw);


?>
