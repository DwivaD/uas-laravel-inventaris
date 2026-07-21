@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="card border-0 shadow-lg rounded-4 mb-4">
        <div class="card-body p-5">

            <div class="row align-items-center">

                <div class="col-md-3 text-center">

                    <img 
                        src="/images/logo.png"
                        alt="Logo"
                        width="170"
                        class="img-fluid mb-3">

                </div>

                <div class="col-md-9">

                    <h1 class="fw-bold text-primary mb-1">
                        Sistem Inventaris Barang
                    </h1>

                    <h4 class="text-secondary">
                        Universitas Muhammadiyah PKU Surakarta
                    </h4>

                    <hr>

                    <h5 class="fw-bold">
                        UAS Pemrograman Web
                    </h5>

                    <table class="table table-borderless table-sm mb-0">

                        <tr>
                            <td width="170"><strong>Nama</strong></td>
                            <td>: Dwi Eva Satria Darmadi</td>
                        </tr>

                        <tr>
                            <td><strong>NIM</strong></td>
                            <td>: 2202505026</td>
                        </tr>

                        <tr>
                            <td><strong>Program Studi</strong></td>
                            <td>: D4 Teknologi Rekayasa Elektromedik</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>
    </div>


    <!-- Statistik -->
    <div class="row g-4">

        <div class="col-md-4">

            <div class="card border-0 shadow rounded-4 bg-primary text-white">

                <div class="card-body text-center p-4">

                    <i class="bi bi-box-seam display-3"></i>

                    <h5 class="mt-3">
                        Total Barang
                    </h5>

                    <h1 class="fw-bold display-4">
                        {{ $totalBarang }}
                    </h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow rounded-4 bg-success text-white">

                <div class="card-body text-center p-4">

                    <i class="bi bi-tags-fill display-3"></i>

                    <h5 class="mt-3">
                        Total Kategori
                    </h5>

                    <h1 class="fw-bold display-4">
                        {{ $totalKategori }}
                    </h1>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow rounded-4 bg-warning">

                <div class="card-body text-center p-4">

                    <i class="bi bi-bar-chart-fill display-3"></i>

                    <h5 class="mt-3">
                        Total Stok
                    </h5>

                    <h1 class="fw-bold display-4">
                        {{ $totalStok }}
                    </h1>

                </div>

            </div>

        </div>

    </div>


    <!-- Tombol -->
    <div class="text-center mt-5">

        <a href="/inventaris"
            class="btn btn-success btn-lg px-5 rounded-pill shadow">

            <i class="bi bi-box-seam"></i>

            Kelola Inventaris

        </a>

    </div>


    <!-- Footer -->
    <div class="card border-0 shadow-sm mt-5 rounded-4">

        <div class="card-body text-center">

            <h6 class="mb-1">
                Sistem Inventaris Barang Berbasis Laravel 13
            </h6>

            <small class="text-muted">

                Universitas Muhammadiyah PKU Surakarta

                <br>

                © 2026 | Dwi Eva Satria Darmadi

            </small>

        </div>

    </div>

</div>

@endsection