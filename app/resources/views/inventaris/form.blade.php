<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Kode Barang

        </label>

        <input
            type="text"
            name="kode_barang"
            class="form-control"
            value="{{ old('kode_barang',$inventari->kode_barang ?? '') }}"
            required>

    </div>

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Nama Barang

        </label>

        <input
            type="text"
            name="nama_barang"
            class="form-control"
            value="{{ old('nama_barang',$inventari->nama_barang ?? '') }}"
            required>

    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Kategori

        </label>

        <input
            type="text"
            name="kategori"
            class="form-control"
            value="{{ old('kategori',$inventari->kategori ?? '') }}"
            required>

    </div>

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Jumlah

        </label>

        <input
            type="number"
            name="jumlah"
            class="form-control"
            value="{{ old('jumlah',$inventari->jumlah ?? '') }}"
            required>

    </div>

</div>

<div class="row">

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Kondisi

        </label>

        <input
            type="text"
            name="kondisi"
            class="form-control"
            value="{{ old('kondisi',$inventari->kondisi ?? '') }}"
            required>

    </div>

    <div class="col-md-6 mb-3">

        <label class="form-label fw-semibold">

            Lokasi

        </label>

        <input
            type="text"
            name="lokasi"
            class="form-control"
            value="{{ old('lokasi',$inventari->lokasi ?? '') }}"
            required>

    </div>

</div>

<hr>

<div class="d-flex justify-content-end">

    <button class="btn btn-primary me-2">

        <i class="bi bi-save"></i>

        Simpan Perubahan

    </button>

    <a href="/inventaris" class="btn btn-secondary">

        <i class="bi bi-arrow-left"></i>

        Kembali

    </a>

</div>