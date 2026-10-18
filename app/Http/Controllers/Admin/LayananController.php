<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::latest()->paginate(10);
        return view('admin.layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->rules(), $this->messages());
        Layanan::create($data);

        return redirect()->route('admin.layanan.index')
            ->with('success', 'Data layanan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $data = $request->validate($this->rules(), $this->messages());
        $layanan->update($data);

        return redirect()->route('admin.layanan.index')
            ->with('success', 'Data layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanan $layanan)
    {
        try {
            $layanan->delete();
            return redirect()->route('admin.layanan.index')
                ->with('success', 'Data layanan berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.layanan.index')
                ->with('error', 'Data layanan gagal dihapus.');
        }
    }

    public function rules()
    {
        return [
            'nama_layanan' => 'required|string|max:100',
            'harga_per_kg' => 'required|integer|min:0',
            'estimasi_hari' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'nama_layanan.required' => 'Nama layanan wajib diisi.',
            'harga_per_kg.required' => 'Harga per kg wajib diisi.',
            'harga_per_kg.integer' => 'Harga per kg harus berupa angka.',
            'estimasi_hari.required' => 'Estimasi hari wajib diisi.',
            'estimasi_hari.integer' => 'Estimasi hari harus berupa angka.',
        ];
    }
    
}
