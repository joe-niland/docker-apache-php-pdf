<?php

if (!empty($_GET) && !isset($_GET['pdf'])) {
    echo "No PDF";
} else {

    $pdfId = $_GET['pdf'];

    // Here you should retrieve the filename by pdfId
    //$pdfFilePath = sprintf("../pdf/%s.pdf", $retrievedFileName);
    $pdfFilePath = "../pdf/dummy.pdf";
    
    if (file_exists($pdfFilePath)) {
        header('Content-Description: File Transfer');
        header("Content-type: application/octet-stream");
        header("Content-disposition: attachment;filename=" . basename($pdfFilePath));
        header('Content-Length: ' . filesize($pdfFilePath));
        readfile($pdfFilePath);
        exit;
    } else {
        echo "File did not exist";
    }
}
