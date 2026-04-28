Echo ("Bilangan Pertama : ");
Echo $A;
Echo "<br>";
Echo ("Bilangan Kedua : ");
Echo $B;
Echo "<br> <br>";

Echo "Hasil Penjumlahan 2 buah bilangan ";
Echo "<br>";
$jumlahbil = jumlah($A,$B);
Printf("Penjumlahan antara :  %d  +  %d  =  %d",$A,$B,$jumlahbil);

Echo "<br><br>";
Echo "Hasil Pengurangan 2 buah bilangan ";
Echo "<br>";
$kurangbil = kurang($A,$B);
Printf("Pengurangan antara :  %d  -  %d  =  %d ",$A,$B,$kurangbil);

Echo "<br><br>";
Echo "Hasil Perkalian 2 buah bilangan ";
Echo "<br>";
$kalibil = kali($A,$B);
Printf("Perkalian antara :  %d  *  %d  =  %d ", $A, $B, $kalibil);

Echo "<br><br>";
Echo "Hasil Pembagian 2 buah bilangan ";
Echo "<br>";
$bagibil = bagi($A,$B);
Printf("Pembagian antara :  %d  / %d  =  %d ",$A,$B,$bagibil);

Echo "<br><br>";
?>