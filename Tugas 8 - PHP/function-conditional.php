<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php 

        echo "<h3> Soal No 1 Greetings </h3>";
        /* 
            Soal No 1
            Greetings
            Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

            contoh: greetings("abduh");
            Output: "Halo Abduh, Selamat Datang di Sanbercode!"
        */

        // Code function di sini


        function greetings($nama){
            echo"Halo " . $nama . ", Selamat datang di sanbercode! <br>";
        }

        greetings("Bagas");
        greetings("Wahyu");
        greetings("Abdul");

        echo "<br>";
        
        echo "<h3>Soal No 2 Reverse String</h3>";
        /* 
            Soal No 2
            Reverse String
            Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
            Function reverseString menerima satu parameter berupa string.
            NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

            reverseString("abdul");
            Output: ludba
            
        */
 
        // Code function di sini 
    function balik_kata($string)
    {
        $result ="";
        $panjang = strlen($string);
        for($i = 1; $i <= $panjang; $i++)
        {
            $result.= substr($string, $panjang-$i, 1);
        }
        return $result;
    }

        echo balik_kata("abduh");
        echo "<br>";
        echo balik_kata("Sanbercode");
        echo "<br>";
        echo balik_kata("We Are Sanbers Developers");
        echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


// Code function di sini
function palindrome($string)
    {
        $result ="";
        $panjang = strlen($string);
        for($i = 1; $i <= $panjang; $i++)
        {
            $result.= substr($string, $panjang-$i, 1);
        }
        if ($string == $result){
            echo $result . " //true <br>";
        }else {
            echo $result . " //false <br>";
        }
    }

// Hapus komentar di bawah ini untuk jalankan code
echo palindrome("civic") ; // true
echo palindrome("nababan") ; // true
echo palindrome("jambaban"); // false
echo palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini
function tentukan_nilai($angka)
{
    if ($angka <= 98 && $angka >=77) {
        echo $angka . " //Sangat Baik <br>";
    }elseif ($angka <= 76 && $angka >=68) {
        echo $angka . " //Baik <br>";
    }elseif ($angka <= 67  && $angka >=44) {
        echo $angka . " //Cukup <br>";
    }elseif ($angka <= 43 && $angka >=1) {
        echo $angka . " //Kurang <br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang

?>
</body>
</html>