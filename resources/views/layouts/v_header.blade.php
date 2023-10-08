<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    {{-- csrf token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>sig_umkm</title>

    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
        ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    {{-- sweetalert --}}
    {{-- <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.css"
        integrity="sha512-yX1R8uWi11xPfY7HDg7rkLL/9F1jq8Hyiz8qF4DV2nedX4IVl7ruR2+h3TFceHIcT5Oq7ooKi09UZbI39B7ylw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('stisla') }}/assets/css/components.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">


</head>

@if (session('message'))
    {{ sweetAlert(session('message'), 'success') }}
@endif
@if (session('error'))
    {{ sweetAlert(session('error'), 'warning') }}
@endif
<div class="import-loading">
    <img src="{{ asset('img/svg_animated/Double Ring-1.9s-200px.svg') }}" alt="">
    <span>Kami Akan Kembali</span>
</div>
<div class="loader">
    <!-- <img src="{{ asset('img/svg_animated/loading.svg') }}" alt="loading"> -->
    <i style="font-size: 50px;" class="fas fa-globe-asia fa-spin"></i>
</div>
