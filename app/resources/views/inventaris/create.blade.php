@extends('layouts.app')

@section('content')

<div class="card shadow">

    <div class="card-header">
        <h3>Tambah Inventaris</h3>
    </div>

    <div class="card-body">

        <form action="/inventaris" method="POST">

            @csrf

            @include('inventaris.form')

        </form>

    </div>

</div>

@endsection