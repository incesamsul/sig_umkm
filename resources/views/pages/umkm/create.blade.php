@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Umkm Tana Toraja </h5>
                        <a href="{{ URL::to('/admin/umkm') }}" class="btn bg-main text-white ms-2">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="card-body">

                        @if ($edit)
                            <form action="{{ URL::to('/admin/umkm/' . $edit->id . '/update') }}" method="post"
                                enctype="multipart/form-data">
                            @else
                                <form action="{{ URL::to('/admin/umkm') }}" method="post" enctype="multipart/form-data">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input value="{{ $edit ? $edit->nama : '' }}" type="text" class="form-control" name="nama"
                                id="nama">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">tgl_lahir</label>
                            <input value="{{ $edit ? $edit->tgl_lahir : '' }}" type="date" class="form-control"
                                name="tgl_lahir" id="tgl_lahir">
                        </div>
                        <div class="form-group">
                            <label for="jk">jk</label>
                            <input value="{{ $edit ? $edit->jk : '' }}" type="text" class="form-control" name="jk"
                                id="jk">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input value="{{ $edit ? $edit->alamat : '' }}" type="text" class="form-control"
                                name="alamat" id="alamat">
                        </div>
                        <div class="form-group">
                            <label for="alamat_tempat">alamat_tempat</label>
                            <input value="{{ $edit ? $edit->alamat_tempat : '' }}" type="text" class="form-control"
                                name="alamat_tempat" id="alamat_tempat">
                        </div>
                        <div class="form-group">
                            <label for="bidang_usaha">bidang_usaha</label>
                            <input value="{{ $edit ? $edit->bidang_usaha : '' }}" type="text" class="form-control"
                                name="bidang_usaha" id="bidang_usaha">
                        </div>
                        <div class="form-group">
                            <label for="nib">nib</label>
                            <input value="{{ $edit ? $edit->nib : '' }}" type="text" class="form-control" name="nib"
                                id="nib">
                        </div>
                        <div class="form-group">
                            <label for="status_pekerjaan">status_pekerjaan</label>
                            <input value="{{ $edit ? $edit->status_pekerjaan : '' }}" type="text" class="form-control"
                                name="status_pekerjaan" id="status_pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="telpon">telpon</label>
                            <input value="{{ $edit ? $edit->telpon : '' }}" type="text" class="form-control"
                                name="telpon" id="telpon">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">provinsi</label>
                            <input value="{{ $edit ? $edit->provinsi : '' }}" type="text" class="form-control"
                                name="provinsi" id="provinsi">
                        </div>
                        <div class="form-group">
                            <label for="kab_kota">kab_kota</label>
                            <input value="{{ $edit ? $edit->kab_kota : '' }}" type="text" class="form-control"
                                name="kab_kota" id="kab_kota">
                        </div>
                        <div class="form-group">
                            <label for="kec">kec</label>
                            <input value="{{ $edit ? $edit->kec : '' }}" type="text" class="form-control" name="kec"
                                id="kec">
                        </div>
                        <div class="form-group">
                            <label for="desa">desa</label>
                            <input value="{{ $edit ? $edit->desa : '' }}" type="text" class="form-control"
                                name="desa" id="desa">
                        </div>
                        <div class="form-group">
                            <label for="rt_rw">rt_rw</label>
                            <input value="{{ $edit ? $edit->rt_rw : '' }}" type="text" class="form-control"
                                name="rt_rw" id="rt_rw">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">kode_pos</label>
                            <input value="{{ $edit ? $edit->kode_pos : '' }}" type="text" class="form-control"
                                name="kode_pos" id="kode_pos">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input value="{{ $edit ? $edit->gambar : '' }}" type="file" class="form-control"
                                name="gambar" id="gambar">
                        </div>
                        <button type="submit" class="btn bg-main text-white" id="modalBtn">Simpan</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>




        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#liDashboard').addClass('active');
    </script>
@endsection
