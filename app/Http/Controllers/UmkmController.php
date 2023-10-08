<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UmkmController extends Controller
{
    public function index()
    {
        $data['umkm'] = Umkm::all();
        return view('pages.umkm.index', $data);
    }
    public function create()
    {
        $data['edit'] = [];
        return view('pages.umkm.create', $data);
    }

    public function edit($id)
    {
        $data['edit'] = Umkm::find($id);
        return view('pages.umkm.create', $data);
    }

    public function datatable()
    {
        $nama = isset($_GET['nama']) ? $_GET['nama'] : '';


        $query = Umkm::query();

        if ($nama !== '') {
            $query->where('nama', 'like', '%' . $nama . '%');
        }

        return DataTables::eloquent($query)

            ->addColumn('aksi', function ($row) {
                return '<a href="/admin/umkm/' . $row->id . '/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
            <a href="/admin/umkm/' . $row->id . '/delete" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
            })
            ->rawColumns(['aksi']) // Allow HTML tags in columns
            ->make(true);
    }

    public function update(Request $request, $id)
    {
        Umkm::find($id)->update($request->all());
        return redirect('admin/umkm')->with('message', 'Data Berhasil Diubah');
    }

    public function store(Request $request)
    {

        Umkm::create($request->all());
        return redirect('admin/umkm')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        Umkm::find($id)->delete();
        return redirect('admin/umkm')->with('message', 'Data Berhasil Dihapus');
    }
}
