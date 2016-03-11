<?php
	include("VideoStream.php"); 
	/*$ficheros1 = scandir( "E:\compaq\Movies" );
	// $ficheros1  = scandir($directorio);
	// var_dump($ficheros1);
	$mp4=array();

	foreach ($ficheros1 as &$video) {
		if (preg_match("/\.mp4$/i",$video)) {
			var_dump($video);
			# code...
		}
	}*/
	$stream = new VideoStream("Stalingrad.2013.RUS.BRRip.XviD.MP3-RARBG.mp4");
	$stream->start();
?>