<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InventarisController extends Controller
{
    /**
     * Menampilkan daftar inventaris
     */
    public function index(Request $request)
    {
        $keyword = $request->search;

        $inventaris = Inventaris::when($keyword, function ($query) use ($keyword) {
            $query->where('kode_barang', 'like', "%{$keyword}%")
                  ->orWhere('nama_barang', 'like', "%{$keyword}%")
                  ->orWhere('kategori', 'like', "%{$keyword}%")
                  ->orWhere('lokasi', 'like', "%{$keyword}%")
                  ->orWhere('kondisi', 'like', "%{$keyword}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(10)
        ->withQueryString();

        return view('inventaris.index', compact('inventaris'));
    }

    /**
     * Form tambah data
     */
    public function create()
    {
        return view('inventaris.create');
    }

    /**
     * Simpan data
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_barang' => 'required|string|max:50|unique:inventaris,kode_barang',
            'nama_barang' => 'required|string|max:255',
            'kategori'    => 'required|string|max:100',
            'jumlah'      => 'required|integer|min:0',
            'kondisi'     => 'required|string|max:100',
            'lokasi'      => 'required|string|max:255',
        ]);

        Inventaris::create($validated);

        return redirect('/inventaris')
            ->with('success', 'Data inventaris berhasil ditambahkan.');
    }

    /**
     * Detail data
     */
    public function show(Inventaris $inventari)
    {
        return view('inventaris.show', compact('inventari'));
    }

    /**
     * Form edit
     */
    public function edit(Inventaris $inventari)
    {
        return view('inventaris.edit', compact('inventari'));
    }

    /**
     * Update data
     */
    public function update(Request $request, Inventaris $inventari)
    {
        $validated = $request->validate([
            'kode_barang' => [
                'required',
                'string',
                'max:50',
                Rule::unique('inventaris', 'kode_barang')->ignore($inventari->id),
            ],
            'nama_barang' => 'required|string|max:255',
            'kategori'    => 'required|string|max:100',
            'jumlah'      => 'required|integer|min:0',
            'kondisi'     => 'required|string|max:100',
            'lokasi'      => 'required|string|max:255',
        ]);

        $inventari->update($validated);

        return redirect('/inventaris')
            ->with('success', 'Data inventaris berhasil diubah.');
    }

    /**
     * Hapus data
     */
    public function destroy(Inventaris $inventari)
    {
        $inventari->delete();

        return redirect('/inventaris')
            ->with('success', 'Data inventaris berhasil dihapus.');
    }
}