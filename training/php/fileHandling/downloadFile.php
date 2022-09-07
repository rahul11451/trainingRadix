<?php

    if(isset($_POST['downloadFile'])){
        $name1 = $_REQUEST["fileName"];
        if(!empty($name1)){
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename='.$name1);
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($name1));
            header("Content-Type: text/plain");
            readfile('text/'.$name1);
        } 
        else {
            echo 'upps';
        }
    }
?>