<?php
include 'roomstruct.php';
include 'getvideolength.php';
	processqueue();
	function processqueue() {
		$initialtime = time();
		$currenttime = 0;
		$currentvideo;
		$lengthofvideo;
 		while(true) {
			if (!checkempty()) {
				$currentvideo = getnextvideo();
		                $lengthofvideo = gettime($currentvideo);
				$currenttime = time();
                		while($currenttime-$initialtime<$lengthofvideo) {
                			echo( $currentvideo.','.($currenttime-$initialtime).'\n');
                			$myfile = fopen("encodevideo", "w") or die("Unable to open file!");
                			fwrite($myfile, $currentvideo.','.($currenttime-$initialtime));
                			fclose($myfile);
                			sleep(3);
                			$currenttime = time();
            			}
            		removefromqueue();
            		$initialtime = time();
			}
			else {
				$myfile = fopen("encodevideo", "w") or die("Unable to open file!");
                                fwrite($myfile, 'empty');
                                fclose($myfile);
			}
			sleep(3);		
		}
	}
?>
