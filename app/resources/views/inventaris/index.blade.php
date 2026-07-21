@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="card border-0 shadow-lg rounded-4 mb-4">

        <div class="card-body">

            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <div>

                    <h2 class="fw-bold text-primary mb-1">
                        <i class="bi bi-box-seam"></i>
                        Data Inventaris
                    </h2>

                    <small class="text-muted">
                        Sistem Inventaris Barang
                    </small>

                </div>

                <div>

                    <a href="/"
                        class="btn btn-secondary rounded-pill px-4">

                        <i class="bi bi-house-door-fill"></i>

                        Dashboard

                    </a>

                    <a href="/inventaris/create"
                        class="btn btn-success rounded-pill px-4">

                        <i class="bi bi-plus-circle-fill"></i>

                        Tambah Barang

                    </a>

                </div>

            </div>

        </div>

    </div>

    <!-- Pencarian -->

    <div class="card border-0 shadow rounded-4 mb-4">

        <div class="card-body">

            <form method="GET">

                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-search"></i>

                    </span>

                    <input
                        type="text"
                        name="search"
                        class="form-control"
                        placeholder="Cari berdasarkan kode, nama, kategori atau lokasi..."
                        value="{{ request('search') }}">

                    <button class="btn btn-primary">

                        Cari

                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- Tabel -->

    <div class="card border-0 shadow rounded-4">

        <div class="card-body table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-primary">

                    <tr>

                        <th>No</th>

                        <th>Kode</th>

                        <th>Nama Barang</th>

                        <th>Kategori</th>

                        <th>Jumlah</th>

                        <th>Kondisi</th>

                        <th>Lokasi</th>

                        <th width="160">
                            Aksi
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($inventaris as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            <strong>

                                {{ $item->kode_barang }}

                            </strong>

                        </td>

                        <td>

                            {{ $item->nama_barang }}

                        </td>

                        <td>

                            @if($item->kategori == 'Alkes')

                                <span class="badge bg-success">

                                    Alkes

                                </span>

                            @else

                                <span class="badge bg-primary">

                                    Non Alkes

                                </span>

                            @endif

                        </td>

                        <td>

                            <span class="badge bg-dark">

                                {{ $item->jumlah }}

                            </span>

                        </td>

                        <td>

                            @if($item->kondisi == 'Baik')

                                <span class="badge bg-success">

                                    Baik

                                </span>

                            @elseif($item->kondisi == 'Rusak Ringan')

                                <span class="badge bg-warning text-dark">

                                    Rusak Ringan

                                </span>

                            @else

                                <span class="badge bg-danger">

                                    Rusak Berat

                                </span>

                            @endif

                        </td>

                        <td>

                            {{ $item->lokasi }}

                        </td>

                        <td>

                            <a href="/inventaris/{{ $item->id }}/edit"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form
                                action="/inventaris/{{ $item->id }}"
                                method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">

                                    <i class="bi bi-trash-fill"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="8" class="text-center py-5">

                            <i class="bi bi-inbox display-5 text-secondary"></i>

                            <br><br>

                            <strong>

                                Belum ada data inventaris

                            </strong>

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection