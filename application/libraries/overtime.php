<?php
// $in = $this->input->post('in');
// $out = $this->input->post('out');

// $awal = strtotime($in);
// $akhir = strtotime($out);

// $pagi = strtotime("07:01");
// $malam = strtotime("18:01");
// // rumus menghitung terlambat atau tidak
// $x =  $awal - $pagi;
// $jam = floor($x / (60 * 60));
// $mnt = $x - $jam * (60 * 60);
// $menit = floor($mnt / 60);
// $hasil = $jam . ":" . $menit;

// if ($hasil < 0) {
//     $ket = "Tepat Waktu";
//     $menit = 0;
//     $terlambat = 0;
// } elseif ($hasil >= 0) {
//     $ket = "terlambat";
//     $menit;
//     $terlambat = $hasil;
// }

// // menghitung overtime
// $xx =  $akhir - $awal;
// $jamx = floor($xx / (60 * 60));
// $mntx = $xx - $jamx * (60 * 60);
// $hasilx = $jamx;

// echo $hasilx;
// $overtime = $hasilx - $menit;
// if ($overtime < $menit) {
//     $overtime = 0;
// }
// echo "<br>";

// echo "<br>";
// $data = array(
//     "in" => $in,
//     "out" => $out,
//     "ket" => $ket,
//     "terlambat" => $terlambat,
//     "overtime" => $overtime
// );
// var_dump($data);
{
    // $awal = strtotime($in);
    // $akhir = strtotime($out);


    // // rumus menghitung terlambat atau tidak
    // $x =  $awal - $akhir;
    // $jam = floor($x / (60 * 60));
    // $mnt = $x - $jam * (60 * 60);
    // $menit = floor($mnt / 60);
    // $hasil = $jam . ":" . $menit;

    // if ($hasil < 0) {
    //         $ket = "Tepat Waktu";
    //         $menit = 0;
    //         $terlambat = 0;
    // } elseif ($hasil >= 0) {
    //         $ket = "terlambat";
    //         $menit;
    //         $terlambat = $hasil;
    // }

    // // menghitung overtime
    // $xx =  $akhir - $awal;
    // $jamx = floor($xx / (60 * 60));
    // $mntx = $xx - $jamx * (60 * 60);

    function overtime()
    {
        $jamx = "tes";
        return $jamx;
    }
}
