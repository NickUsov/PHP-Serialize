<?php
    include_once '../classes.php';
    $strRectangle = file_get_contents('rect.txt');
    echo $strRectangle.'<br>';
    $rectangle = unserialize($strRectangle);
    $rectangle->Show();
?>