<?php
    $file_name = $_GET['file_name'];
    $fo = fopen('upload/'.$file_name,'rb');

    header('Content-Type: application/pdf');
    fpassthru($fo);
?>