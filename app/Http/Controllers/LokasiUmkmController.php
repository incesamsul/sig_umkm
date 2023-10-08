<?php

namespace App\Http\Controllers;

use App\Models\LokasiUmkm;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LokasiUmkmController extends Controller
{
    public function index()
    {
        return view('pages.lokasi_umkm.index');
    }

    public function peta(Request $request)
    {
        $data['lat'] = $request->lat ? $request->lat : 0;
        $data['long'] = $request->long ? $request->long : 0;
        $data['lokasi_umkm'] = LokasiUmkm::all();
        return view('pages.lokasi_umkm.peta', $data);
    }

    public function datatable()
    {
        $nama = isset($_GET['nama']) ? $_GET['nama'] : '';


        $query = Umkm::with('lokasi');

        if ($nama !== '') {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        return DataTables::eloquent($query)

            ->addColumn('lat', function ($row) {
                if ($row->lokasi) {
                    if ($row->lokasi->lat) {
                        return $row->lokasi->lat . ' <button data-id="' . $row->id . '" class="btn btn-lat  btn-sm"><i class="fas fa-pen"></i></button>';
                    } else {
                        return '<button data-id="' . $row->id . '" class="btn btn-lat  btn-sm"><i class="fas fa-plus"></i></button>';
                    }
                } else {
                    return '<button data-id="' . $row->id . '" class="btn btn-lat  btn-sm"><i class="fas fa-plus"></i></button>';
                }
                // return $row->lokasi ? $row->lokasi->lat : '<button data-id="' . $row->id . '" class="btn btn-lat  btn-sm"><i class="fas fa-plus"></i></button>';
            })
            ->addColumn('long', function ($row) {
                if ($row->lokasi) {
                    if ($row->lokasi->long) {
                        return $row->lokasi->long . ' <button data-id="' . $row->id . '" class="btn btn-long  btn-sm"><i class="fas fa-pen"></i></button>';
                    } else {
                        return '<button data-id="' . $row->id . '" class="btn btn-long  btn-sm"><i class="fas fa-plus"></i></button>';
                    }
                } else {
                    return '<button data-id="' . $row->id . '" class="btn btn-lat  btn-sm"><i class="fas fa-plus"></i></button>';
                }
                // return $row->lokasi ? $row->lokasi->long : '<button data-id="' . $row->id . '" class="btn btn-long  btn-sm"><i class="fas fa-plus"></i></button>';
            })
            ->rawColumns(['lat', 'long']) // Allow HTML tags in columns
            ->make(true);
    }

    public function storeLat(Request $request)
    {
        $lokasi = LokasiUmkm::where('umkm_id', $request->id);
        if ($lokasi->first()) {
            $lokasi->update([
                'lat' => $request->lat
            ]);
        } else {
            LokasiUmkm::create([
                'umkm_id' => $request->id,
                'lat' => $request->lat
            ]);
        }
    }

    public function storeLong(Request $request)
    {
        $lokasi = LokasiUmkm::where('umkm_id', $request->id);
        if ($lokasi->first()) {
            $lokasi->update([
                'long' => $request->long
            ]);
        } else {
            LokasiUmkm::create([
                'umkm_id' => $request->id,
                'long' => $request->long
            ]);
        }
    }
}
