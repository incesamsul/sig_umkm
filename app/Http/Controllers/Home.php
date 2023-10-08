<?php

namespace App\Http\Controllers;

use App\Models\LokasiUmkm;
use App\Models\Umkm;
use Illuminate\Http\Request;

class Home extends Controller
{


    public function testing()
    {
        $locations = LokasiUmkm::all();

        $formattedLocations = [];

        foreach ($locations as $location) {
            $formattedLocations[] = [
                'coordinates' => [$location->long, $location->lat],
                'name' => $location->umkm->nama,
            ];
        }

        $data['kordinat'] = json_encode($formattedLocations);
        return view('pages.lokasi_umkm.maps', $data);
    }


    public function beranda(Request $request)
    {
        $data['lat'] = $request->lat ? $request->lat : 0;
        $data['long'] = $request->long ? $request->long : 0;
        $data['lokasi_umkm'] = LokasiUmkm::all();
        return view('pages.front.beranda', $data);
    }
}
