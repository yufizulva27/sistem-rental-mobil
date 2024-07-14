<?php

namespace App\Http\Controllers;

use App\Models\DataSewa;
use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyewas = DataSewa::all();

        return view('dashboard.masterData.dataPenyewa.index', compact('penyewas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.masterData.dataPenyewa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'email' => 'required|string|max:255',
        ]);

        // Proses menyimpan data ke dalam database
        $penyewa = new Penyewa();
        $penyewa->name = $request->name;
        $penyewa->alamat = $request->alamat;
        $penyewa->no_telp = $request->no_telp;
        $penyewa->email = $request->email;

        $penyewa->save();

        // Redirect atau apapun yang Anda perlukan setelah penyimpanan berhasil
        $previousUrl = url()->previous();

        if (strpos($previousUrl, 'formCreateDataPenyewa') !== false) {
            return redirect()->route('cars.index')->with('success', 'Data Penyewa berhasil ditambahkan!');
        } else {
            return redirect()->route('dashboard.dataPenyewa.index')->with('success', 'Data Penyewa berhasil ditambahkan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyewa = Penyewa::findOrFail($id);

        return view('dashboard.masterData.dataPenyewa.edit', compact('penyewa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
        ]);
    
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->name = $request->name;
        $penyewa->alamat = $request->alamat;
        $penyewa->no_telp = $request->no_telp;
        $penyewa->email = $request->email;
    
        $penyewa->save();
    
        return redirect()->route('dashboard.dataPenyewa.index')
                         ->with('success', 'Data Penyewa berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyewa = Penyewa::findOrFail($id);

        $penyewa->delete();

        return redirect()->route('dashboard.dataPenyewa.index')
                        ->with('success', 'Data Penyewa berhasil dihapus.');
    }

    public function formCreateDataPenyewa()
    {
        return view('layouts.formPendaftaran.formDataPenyewa');
    }
}
