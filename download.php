<?php
    $file_name = $_GET['file_name'];
    $fo = fopen('upload/'.$file_name,'rb');

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$file_name);
    fpassthru($fo);
?>