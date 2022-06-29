<?php
    require_once 'conn.php';

    $filename = 'List of Records-'.date('Y-m-d').'.csv';

    $sql = "SELECT * FROM table_records";
    $result = mysqli_query($conn,$sql);

    $array = array();

    $file= fopen($filename,'w');
    $array = array ("NAME","AGE","CONTACT_NUMBER","ADDRESS","EMAIL","CREATION_DATE");
    fputcsv($file,$array);

    while($row = mysqli_fetch_array($result)){
        $name = $row ['NAME'];
        $age = $row ['AGE'];
        $number = $row ['CONTACT_NUMBER'];
        $address = $row ['ADDRESS'];
        $email = $row ['EMAIL'];
        $creation = $row ['CREATION_DATE'];

        $array = array($name,$age,$number,$address,$email,$creation);
        fputcsv($file,$array);
    }
    fclose($file);
    
    header("Content-Description: File Transfer");
    header("Content-Disposition: Attachment; filename=$filename");
    header("Content-Type: application/csv");
    readfile($filename);
    unlink($filename);
    exit();
?>