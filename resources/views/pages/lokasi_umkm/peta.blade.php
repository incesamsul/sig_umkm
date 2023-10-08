@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">


            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Peta UMKM Tana Toraja</h5>
                    </div>
                    <div class="card-body">
                        <iframe width="100%" height="800" src="{{ URL::to('/testing') }}" frameborder="0"></iframe>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Jarak 10 Terdekat</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Current Lat</th>
                                    <th>Current Long</th>
                                    <th>Lat</th>
                                    <th>Long</th>
                                    <th>Jarak (km)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lokasi_umkm as $row)
                                    <tr>
                                        <td>{{ $row->umkm->nama }}</td>
                                        <td>{{ $lat }}</td>
                                        <td>{{ $long }}</td>
                                        <td>{{ $row->long }}</td>
                                        <td>{{ $row->lat }}</td>
                                        <td>
                                            {{ round(calculateDistanceInKm($lat, $long, $row->long, $row->lat), 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        $('#datatable').DataTable({
            "order": [
                [5, "asc"]
            ] // Order by the second column (Age) in ascending order
        });
        let lat = {{ $lat }};
        let long = {{ $long }};
        console.log(lat);
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                console.log("Latitude: " + latitude);
                console.log("Longitude: " + longitude);

                if (lat == 0) {
                    document.location.href = "/admin/peta?lat=" + latitude + "&long=" + longitude;
                }
                // You can use the latitude and longitude in your code here.
            });
        } else {
            console.log("Geolocation is not available in this browser.");
        }
        $('#liPeta').addClass('active');
    </script>
@endsection
