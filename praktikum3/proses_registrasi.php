<?php
    $domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi"];

    $prodi = [
        "SI"=>"Sistem Informasi",
        "TI"=>"Teknik Iformatika",
        "BD"=>"Bisnis Digital"
    ];

    $skills = [
        "HTML"=>10,
        "CSS"=>10,
        "JavaScript"=>20,
        "PHP"=>30,
        "Python"=>30
    ];

    $skor = ($skills['HTML'] 
                        + $skills['CSS'] 
                        + $skills['JavaScript'] 
                        + $skills['PHP'] 
                        + $skills['Python']);
?>