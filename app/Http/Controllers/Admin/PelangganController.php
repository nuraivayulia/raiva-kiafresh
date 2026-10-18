<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->paginate(10);
        return view('admin.pelanggan.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'no_hp'  => 'required|numeric|digits_between:10,15',
            'alamat' => 'nullable|string',
        ], [
            'nama.required'  => 'Nama pelanggan wajib diisi.',
            'no_hp.required' => 'Nomor HP wajib diisi.',
            'no_hp.numeric'  => 'Nomor HP harus berupa angka.',
        ]);

        Pelanggan::create($data);

        return redirect()->route('admin.pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggan $pelanggan)
    {
        return view('admin.pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'no_hp'  => 'required|numeric|digits_between:10,15',
            'alamat' => 'nullable|string',
        ]);

        $pelanggan->update($data);

        return redirect()->route('admin.pelanggan.index')
            ->with('success', 'Data pelanggan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggan $pelanggan)
    {
        try {
            $pelanggan->delete();
            return redirect()->route('admin.pelanggan.index')
                ->with('success', 'Data pelanggan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.pelanggan.index')
                ->with('error', 'Data pelanggan gagal dihapus.');
        }
    }
}
