<?php
    // tangkap reques class_matematika.php
    require_once 'class_matematika.php';

    // akses static member variable class matematika
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::nikanCounter();
    echo 'Counter Sekarang : '. Matematika::$counter;
    echo '<hr/>';
    
    // akses static member function class matematika
    $x = Matematika::tambahkan(4,5);
    echo "4 + 5 = $x";
    echo '<hr/><br>';

    // akses constanta clas matematika 
    echo 'Nilai PHI : '. Matematika::PHI. "<br>";
    $luas_lingkaran = Matematika::luaslingkaran(8);
    echo '<br/>Luas Lingkaran dengan Jari-jari 8 adalaha : '. $luas_lingkaran;

?>