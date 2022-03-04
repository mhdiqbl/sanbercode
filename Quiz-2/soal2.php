<?php
function tukar_besar_kecil($string){
    $n = strlen($string); 
    for($i = 0; $i < $n; $i++) {
        if(ctype_lower($string[$i])) {
            $besar = strtoupper($string[$i]);
            echo $besar;
        }else{
            $kecil= strtolower($string[$i]);
            echo $kecil;
        }
}
echo "<br>";
}

echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
?>


INSERT INTO customers(name,email,password) values ('John Doe','john@doe.com', 'john123'), ('Jane Doe','jane@doe.com','jenita123'); INSERT INTO orders(amount, customer_id) values (500,1), (200,2), (750,2), (250,1), (400,2);
SELECT customers.name AS customers_name, SUM(amount) AS total_amount FROM orders INNER JOIN customers ON orders.customer_id = customers.id GROUP BY customers.id