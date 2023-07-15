<?php
//menjelaskan inputan nilai
$nilai = 86; 

    //menjelaskan kondisi nilai lebih besar sama dengan 85 dan nilai kurang dari sama dengan 100
if (($nilai >= 85) && ($nilai <=100))
{
    //statement yang akan dijalankan jika nilai inputan lebih dari sama dengan 85 dan kurang dari sama dengan 100
    //output berupa string A dari variabel grade
 $grade = "A";
    //output berupa string "Good, pertahankan nilai kamu" dari variabel grade 
 $info = "Good, pertahankan nilai kamu";
}

//menjelaskan kondisi nilai lebih besar sama dengan 75 dan nilai kurang dari sama dengan 85
elseif (($nilai >= 75) && ($nilai <85))
{
    //statement yang akan dijalankan jika nilai inputan lebih dari sama dengan 75 dan kurang dari sama dengan 85
    //output berupa string B dari variabel grade
 $grade = "B";
    //output berupa string "Nilai kamu bagus, bisa ditingkatkan lagi" dari variabel grade
 $info ="Nilai kamu bagus, bisa ditingkatkan lagi";
}

    //menjelaskan kondisi nilai lebih besar sama dengan 60 dan nilai kurang dari sama dengan 75
elseif (($nilai >= 60) && ($nilai <75))
{
    //statement yang akan dijalankan jika nilai inputan lebih dari sama dengan 60 dan kurang dari sama dengan 75
    //output berupa string C dari variabel grade
 $grade = "C";
    //output berupa string "Nilai kamu cukup, harus ditingkatkan lagi"
 $info ="Nilai kamu cukup, harus ditingkatkan lagi";
}

    //menjelaskan kondisi nilai lebih besar sama dengan 46 dan nilai kurang dari sama dengan 59
elseif (($nilai >= 46) && ($nilai <59))
{
   //statement yang akan dijalankan jika nilai inputan lebih dari sama dengan 46 dan kurang dari sama dengan 59
    //output berupa string D dari variabel grade 
 $grade = "D";
    //output berupa string "Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan"
 $info ="Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan";
}

    //jika tidak ada kondisi yang terpenuhi di atas maka akan blok kode else ini yang aka dijalankan
else
{
    //statement yang akan dijalankan jika blok kode else dijalankan
    //output berupa string "Sangat kurang. Wajib mengulang di semester depan" 
 $grade = "E";
 $info ="Sangat kurang. Wajib mengulang di semester depan";
}
//output yang akan tampil dengan nilai variabel $nilai berisi dari nilai yang di input dan variabel $grade dari statement yang dijalankan sesuai kondisi yang dipenuhi
echo "Kamu mendapatkan : $nilai, dengan grade '$grade' ";
//baris baru
echo "<br>";
//menampilkan
echo $info;
?>