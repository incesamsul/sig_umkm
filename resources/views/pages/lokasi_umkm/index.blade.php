@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Lokasi Umkm Tana Toraja </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped mt-5" id="table-data-serverside">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>bidang</th>
                                    <th>Long</th>
                                    <th>Lat</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="modalLat" tabindex="-1" aria-labelledby="modalLatLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLatLabel">Input lat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="lat">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-simpan-lat">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modallong" tabindex="-1" aria-labelledby="modallongLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modallongLabel">Input lat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="long">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-simpan-long">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#searchbox").on("keyup search input paste cut", function() {
            dataTableSS.search(this.value).draw();
        });

        let dataTableSS;

        $(document).on('click', '.btn-reset-filter', function() {

            const newURL = "{{ URL::to('/admin/lokasi_umkm/datatable') }}";

            if (dataTable) {
                // Update the DataTable's ajax URL and reload it
                dataTableSS.ajax.url(newURL).load();
            }
        });

        $(document).on('click', '.btn-filter', function() {
            let nama = $('#nama').val();
            const newURL =
                `{!! URL::to('/admin/lokasi_umkm/datatable?no_so=${nama}') !!}`;

            if (dataTable) {
                // Update the DataTable's ajax URL and reload it
                dataTableSS.ajax.url(newURL).load();
            }
        });

        dataTableSS = $('#table-data-serverside').DataTable({
            ajax: "{{ URL::to('/admin/lokasi_umkm/datatable') }}",
            processing: true,
            serverSide: true,
            responsive: true,
            ordering: false,

            columns: [{
                    data: 'nama',
                },
                {
                    data: 'bidang_usaha',
                },
                {
                    data: 'lat',
                },

                {
                    data: 'long',
                },


            ]
        });

        $(document).on('click', '.btn-lat', function() {

            $('#modalLat').modal('show');
            let id = $(this).data('id');

            $('.btn-simpan-lat').on('click', function() {
                let lat = $('#lat').val();
                let self = $(this);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/admin/lokasi_umkm/store_lat',
                    method: 'post',
                    data: {
                        lat: lat,
                        id: id
                    },
                    beforeSend: function() {
                        self.html('<i class="fas fa-circle-notch fa-spin"></i>');
                    },
                    success: function(data) {
                        console.log(dataTableSS)
                        $('#modalLat').modal('hide');
                        dataTableSS.ajax.reload();
                        self.html('Simpan');
                    }
                })
            });
        })


        $(document).on('click', '.btn-long', function() {

            $('#modallong').modal('show');
            let id = $(this).data('id');

            $('.btn-simpan-long').on('click', function() {
                let long = $('#long').val();
                let self = $(this);

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/admin/lokasi_umkm/store_long',
                    method: 'post',
                    data: {
                        long: long,
                        id: id
                    },
                    beforeSend: function() {
                        self.html('<i class="fas fa-circle-notch fa-spin"></i>');
                    },
                    success: function(data) {
                        console.log(dataTableSS)
                        $('#modallong').modal('hide');
                        dataTableSS.ajax.reload();
                        self.html('Simpan');
                    }
                })
            });
        })


        $('#liLokasiUmkm').addClass('active');
    </script>
@endsection
