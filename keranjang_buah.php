<?php
    // tangkap request class_fruit
    require_once 'class_fruit.php';

    // create instance objects: $apple and $banana
    $apple = new Fruit();
    $banana = new Fruit();

    // call class members
    $apple->set_name('Apple');
    $apple->set_color('Red');
    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    echo 'Nama Buah ' . $apple->get_name() . ' Warnannya ' . $apple->get_color();
    echo '<br/><br/>Nama Buah ' . $banana->get_name() . ' Warnannya ' . $banana->get_color();
?>
