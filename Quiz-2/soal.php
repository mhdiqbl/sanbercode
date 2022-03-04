<?php
function ubah_huruf($string){
//kode di sini
 $n = strlen($string); 
    for($i = 0; $i < $n; $i++) {
        $no = $string[$i];
        $no = chr(ord($no) + 1);
        echo $no;
    }
    echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
?>

<!-- 
function ubah_huruf($string){
//kode di sini
 $n = strlen($string); 
    for($i = 0; $i < $n; $i++) {
        $posisi = strpos($string, $string[$i]);
        $no = $string[$i];
        if($no != 'z')
        {
        $no = chr(ord($no) + 1);
        echo $no;
        }
    }
    echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu -->