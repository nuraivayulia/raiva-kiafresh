<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promos = Promo::latest()->paginate(10);
        return view('admin.promo.index', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.promo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode'          => 'required|string|max:20|unique:promo,kode',
            'diskon_persen' => 'required|integer|min:1|max:100',
            'aktif'         => 'required|boolean',
        ], $this->messages());

        Promo::create($data);

        return redirect()->route('admin.promo.index')
            ->with('success', 'Data promo berhasil ditambahkan.');
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
    public function edit(Promo $promo)
    {
        return view('admin.promo.edit', compact('promo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promo $promo)
    {
        $data = $request->validate([
            'kode'          => 'required|string|max:20|unique:promo,kode,' . $promo->id,
            'diskon_persen' => 'required|integer|min:1|max:100',
            'aktif'         => 'required|boolean',
        ], $this->messages());

        $promo->update($data);

        return redirect()->route('admin.promo.index')
            ->with('success', 'Data promo berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promo $promo)
    {
        try {
            $promo->delete();
            return redirect()->route('admin.promo.index')
                ->with('success', 'Data promo berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('admin.promo.index')
                ->with('error', 'Data promo gagal dihapus.');
        }
    }

    private function messages()
{
    return [
        'kode.required'          => 'Kode promo wajib diisi.',
        'kode.unique'            => 'Kode promo sudah dipakai.',
        'diskon_persen.required' => 'Diskon wajib diisi.',
        'diskon_persen.integer'  => 'Diskon harus berupa angka.',
        'diskon_persen.min'      => 'Diskon minimal 1%.',
        'diskon_persen.max'      => 'Diskon maksimal 100%.',
        'aktif.required'         => 'Status wajib dipilih.',
    ];
}
}
