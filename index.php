<?php 
    include 'classes.php';
    $rectangle = new Rectangle(2,3,4,5);
    $rectangle->Show();
    $array = [];
    $rect1 = new Rectangle(6, 7, 8, 9);
    $rect2 = new Rectangle(10, 11, 12, 13);
    $rect1->Add($array);
    $rect2->Add($array);
    $rect3 = Rectangle::createInstance1(14, 15);
    $rect3->Add($array);
    foreach ($array as $key) {
        $key->Show();
    }
?>