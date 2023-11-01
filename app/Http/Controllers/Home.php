<?php

namespace App\Http\Controllers;

use App\Models\LokasiUmkm;
use App\Models\Rate;
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
        $data['lokasi_umkm'] = LokasiUmkm::take(10)->get();
        return view('pages.front.beranda', $data);
    }

    public function daftar(Request $request)
    {

        return view('pages.front.daftar');
    }

    public function rate($rate, $id)
    {


        $user = auth()->user();
        if (!$user) {
            return redirect('/login');
        }
        $rating = Rate::where('umkm_id', $id)->where('user_id', auth()->user()->id);
        if (!$rating->first()) {
            Rate::create([
                'umkm_id' => $id,
                'user_id' => auth()->user()->id,
                'rate' => (int)$rate,
            ]);
        } else {
            $rating->update([
                'rate' => (int)$rate,
            ]);
        }
        return redirect()->back();
    }
}
