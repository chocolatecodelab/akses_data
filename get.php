<?php

function resourceWeb($url){
     $data = curl_init();
  curl_setopt($data, CURLOPT_URL, $url);
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

// $x = 20100170;

// while($x <= 20101339) {
//     $sumber = resourceWeb('https://referensi.data.kemdikbud.go.id/tabs.php?npsn='.$x.'#tabs-6');
//     $ambil_kata = explode('<div id="tabs-6">', $sumber);
//     $ambil_kata_lagi = explode('<tr>', $ambil_kata[1]);
//     $ambil_kata_lagi_lagi = explode('<td>', $ambil_kata_lagi[4]);
//     $ambil_kata_lagi_lagi2 = explode('<td>', $ambil_kata_lagi[5]);

    
//     echo $ambil_kata_lagi_lagi[4];
//     echo $ambil_kata_lagi_lagi2[4];
//   $x++;
// }

$x = 20506291;


    
    // echo $ambil_kata_lagi_lagi[4];


    function getData($npsn) {
    $sumber = resourceWeb('https://referensi.data.kemdikbud.go.id/tabs.php?npsn='.$npsn.'#tabs-6');
    $ambil_kata = explode('<div id="tabs-6">', $sumber);
    $ambil_kata_lagi = explode('<tr>', $ambil_kata[1]);
    $ambil_kata_lagi_lagi = explode('<td>', $ambil_kata_lagi[4]);
    $ambil_kata_lagi_lagi2 = explode('<td>', $ambil_kata_lagi[5]);
    return $ambil_kata_lagi_lagi[4] . $ambil_kata_lagi_lagi2[4] .'<br>';
    }

    echo getData(20506291);
    echo getData(20506292);

//     $x = 20506292;

// $sumber = resourceWeb('https://referensi.data.kemdikbud.go.id/tabs.php?npsn='.$x.'#tabs-6');
//     $ambil_kata = explode('<div id="tabs-6">', $sumber);
//     $ambil_kata_lagi = explode('<tr>', $ambil_kata[1]);
//     $ambil_kata_lagi_lagi = explode('<td>', $ambil_kata_lagi[4]);
    
//     echo $ambil_kata_lagi_lagi[4];
    

//     $sumber = resourceWeb('https://referensi.data.kemdikbud.go.id/tabs.php?npsn='.$x.'#tabs-6');
//     $ambil_kata = explode('<div id="tabs-6">', $sumber);
//     $ambil_kata_lagi = explode('<tr>', $ambil_kata[1]);
//     $ambil_kata_lagi_lagi = explode('<td>', $ambil_kata_lagi[5]);
    
//     echo $ambil_kata_lagi_lagi[4];
   
?>

<!-- // var_dump($ambil_kata_lagi_lagi[4]); -->