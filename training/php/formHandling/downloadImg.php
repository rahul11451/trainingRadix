<?php
    $name = $_REQUEST['imgName'];
    header('Contetnt-Type: octet/stream');
    header('Content-Disposition: attachment; filename='.$name);
    // header('Content-length:'.$size);
    readfile('images/'.$name);
?>