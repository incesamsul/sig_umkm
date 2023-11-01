@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Umkm Tana Toraja </h5>
                        <a href="{{ URL::to('/admin/umkm/create') }}" class="btn bg-main text-white ms-2">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped mt-5" id="table-data-serverside">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>tgl_lahir</th>
                                    <th>jk</th>
                                    <th>provinsi ktp</th>
                                    <th>kab ktp</th>
                                    {{-- <th>desa ktp</th>
                                    <th>provinsi usaha</th>
                                    <th>kab usaha</th>
                                    <th>kec usaha</th>
                                    <th>desa usaha</th> --}}
                                    <th>bidang</th>
                                    <th>nib</th>
                                    <th>status</th>
                                    {{-- <th>telp</th> --}}
                                    {{-- <th>gambar</th> --}}
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($umkm as $row)
                                    <tr>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->tgl_lahir }}</td>
                                        <td>{{ $row->jk }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->alamat_tempat }}</td>
                                        <td>{{ $row->bidang_usaha }}</td>
                                        <td>{{ $row->nib }}</td>
                                        <td>{{ $row->status_pekerjaan }}</td>
                                        <td>{{ $row->telpon }}</td>
                                        <td>{{ $row->provinsi }}</td>
                                        <td>{{ $row->kab_kota }}</td>
                                        <td>{{ $row->kec }}</td>
                                        <td>{{ $row->desa }}</td>
                                        <td>{{ $row->rt_rw }}</td>
                                        <td>{{ $row->kode_pos }}</td>
                                        <td><img src="{{ asset('storage/' . $row->gambar) }}" class="img-thumbnail"
                                                width="150px"></td>
                                        <td>
                                            <a href="{{ URL::to('/admin/umkm/' . $row->id . '/edit') }}"
                                                class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="{{ URL::to('/admin/umkm/' . $row->id . '/delete') }}"
                                                class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>




        </div>
    </section>
@endsection

@section('script')
    <script>
        $("#searchbox").on("keyup search input paste cut", function() {
            dataTableSS.search(this.value).draw();
        });

        let dataTableSS;

        $(document).on('click', '.btn-reset-filter', function() {

            const newURL = "{{ URL::to('/admin/umkm/datatable') }}";

            if (dataTable) {
                // Update the DataTable's ajax URL and reload it
                dataTableSS.ajax.url(newURL).load();
            }
        });

        $(document).on('click', '.btn-filter', function() {
            let nama = $('#nama').val();
            const newURL =
                `{!! URL::to('/admin/umkm/datatable?no_so=${nama}') !!}`;

            if (dataTable) {
                // Update the DataTable's ajax URL and reload it
                dataTableSS.ajax.url(newURL).load();
            }
        });

        dataTable = $('#table-data-serverside').DataTable({
            ajax: "{{ URL::to('/admin/umkm/datatable') }}",
            processing: true,
            serverSide: true,
            responsive: true,
            ordering: false,

            columns: [{
                    data: 'nama',
                },
                {
                    data: 'tgl_lahir',
                },
                {
                    data: 'jk',
                },
                {
                    data: 'provinsi1',
                },
                {
                    data: 'kab1',
                },
                // {
                //     data: 'kec1',
                // },
                // {
                //     data: 'desa2',
                // },
                // {
                //     data: 'provinsi2',
                // },
                // {
                //     data: 'kab2',
                // },
                // {
                //     data: 'kec2',
                // },
                // {
                //     data: 'desa2',
                // },
                {
                    data: 'bidang_usaha',
                },
                {
                    data: 'nib',
                },
                {
                    data: 'status',
                },
                // {
                //     data: 'telp',
                // },
                {
                    data: 'aksi',
                },


            ]
        });



        $('#liUmkm').addClass('active');
    </script>
@endsection
