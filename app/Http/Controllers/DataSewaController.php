<?php

namespace App\Http\Controllers;

use App\Models\DataSewa;
use Illuminate\Http\Request;

class DataSewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSewa = DataSewa::all();
        return view("dashboard.masterData.dataSewa.index", compact('dataSewa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataSewa = DataSewa::findOrFail($id);
        return view('dashboard.masterData.dataSewa.show', compact('dataSewa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataSewa = DataSewa::findOrFail($id);
        return view('dashboard.masterData.dataSewa.edit', compact('dataSewa'));
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
            'email' => 'required|email',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_days' => 'required|integer',
            'jarak' => 'required|boolean',
            'delivery_option' => 'required|boolean',
        ]);

        // Cari dataSewa berdasarkan ID
        $dataSewa = DataSewa::findOrFail($id);

        // Update dataSewa dengan data dari request
        $dataSewa->name = $request->name;
        $dataSewa->alamat = $request->alamat;
        $dataSewa->no_telp = $request->no_telp;
        $dataSewa->email = $request->email;
        $dataSewa->start_date = $request->start_date;
        $dataSewa->end_date = $request->end_date;
        $dataSewa->total_days = $request->total_days;
        $dataSewa->jarak = $request->jarak;
        $dataSewa->delivery_option = $request->delivery_option;

        // Simpan perubahan ke database
        $dataSewa->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('dashboard.dataSewa.index')
                        ->with('success', 'Data Sewa berhasil diupdate.');
    }

    public function printKwitansi($id)
    {
        $dataSewa = DataSewa::findOrFail($id);
        return view('dashboard.masterData.dataSewa.kwitansi', compact('dataSewa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
