<?php
//Mengecek Bilangan prima

$prima = 0;
$x = 4;  // Angka yang diinputkan

echo "<h2>Cek Bilangan Prima</h2>";
echo "Angka yang di inputkan adalah = ".$x."<br>";
echo "Hasil pengecekan menyatakan bahwa ".$x." adalah : ";

for ($j = 1; $j <= $x; $j++ ) {
	
	if ( $x%$j == 0 ) {
	
		$prima ++;
	
	}
}

if ($prima == 2 ) { 
	
	echo "<strong>Bilangan Prima</strong>";

} else {

	echo "<strong>Bukan Bilangan Prima</strong>";
}