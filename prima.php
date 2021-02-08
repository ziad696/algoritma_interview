<?php
// Bilangan Prima dimulai dari 2 dimana angka prima adalah angka yg hanya dapat dibagi oleh 1 dan angka itu sendiri.
// atau bisa dibilang dia hanya memiliki 2 angka pembagi

echo "Bilangan prima dari 1 - 100 adalah = <br><br>";  

for ($i = 1; $i <= 100; $i++) {
	
	$prima = 0;
	
	for ($j = 1; $j <= $i; $j++ ) {
		
		if ( $i%$j == 0 ) {
		
			$prima ++;
		
		}
	}
	
	if ($prima == 2 ) { //Hanya memiliki 2 angka pembagi, 1 dan angka itu sendiri
		
		echo $i." ";
	}
}