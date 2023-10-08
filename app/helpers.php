<?php


use Illuminate\Support\Facades\DB;


function calculateDistanceInKm($lat1, $lon1, $lat2, $lon2)
{
    $lat1 = floatval($lat1);
    $lon1 = floatval($lon1);
    $lat2 = floatval($lat2);
    $lon2 = floatval($lon2);


    $earthRadius = 6371; // Earth's radius in kilometers
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);

    $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c; // Distance in kilometers

    return $distance;
}


function removeSpace($string)
{
    return str_replace(" ", "", $string);
}

function getUserRoleName($userRoleId)
{
    return DB::table('users')
        ->Join('role', 'role.id_role', '=', 'users.id_role')
        ->where('users.id_role', $userRoleId)
        ->select('nama_role')
        ->first()->nama_role;
}


function sweetAlert($pesan, $tipe)
{
    echo '<script>document.addEventListener("DOMContentLoaded", function() {
        Swal.fire(
            "' . $pesan . '",
            "proses berhasil di lakukan",
            "' . $tipe . '",
        );
    })</script>';
}
