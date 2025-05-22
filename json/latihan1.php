<?php

// $mahasiswa = [
//     [
//         "nama" => "Fadhilah Awaliyah",
//         "nim" => "2217020064",
//         "email" => "fadhilahawaliyah3@gmail.com"
//     ],
//     [
//         "nama" => "Hafsah Khoiriyah",
//         "nim" => "2417020026",
//         "email" => "hfsh26@gmail.com"
//     ],
// ];

$dbh = new PDO('mysql:host=localhost; dbname=fadhilahawaliyahlaravel', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswas'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>