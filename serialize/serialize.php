<?php
    include_once '../classes.php';
    $rectangle = new Rectangle(1, 2, 3, 4);
    $rectangle->Show();
    $strRectangle = serialize($rectangle);
    echo $strRectangle;
    file_put_contents('rect.txt', $strRectangle);
?>