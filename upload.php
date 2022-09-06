<?php

if(isset($_POST["upload-file-button"])) {
    $fileupload = $_FILES['upload-file-label']['name'];
    $fileuploadTMP = $_FILES['upload-file-label']['tmp_name'];
    $folder = 'assets/imgs';

    move_uploaded_file($fileuploadTMP, $fileupload);
}

?>