<?php
include 'fungsi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NAMA = $_POST['NAMA'];
    $EMAIL = $_POST['EMAIL'];
    $PHONE = $_POST['PHONE'];


    $dataTugas = bacaData();
    $dataTugas[] = ['NAMA' => $NAMA, 'EMAIL' => $EMAIL, 'PHONE' => $PHONE];
    simpanData($dataTugas);

    header("Location: index.php");
    exit();
}
?>
