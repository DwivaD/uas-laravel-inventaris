@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-pencil-square"></i>
            Edit Data Inventaris
        </h2>

        <a href="/inventaris" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>
    </div>

    <div class="card shadow-lg border-0">

        <div class="card-header bg-warning text-dark">

            <h5 class="mb-0">

                <i class="bi bi-box-seam"></i>

                Form Edit Inventaris

            </h5>

        </div>

        <div class="card-body">

            <form action="/inventaris/{{ $inventari->id }}" method="POST">

                @csrf
                @method('PUT')

                @include('inventaris.form')

            </form>

        </div>

    </div>

</div>

@endsection