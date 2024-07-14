<?php

namespace App\Http\Controllers;

use App\Models\DataSewa;
use Illuminate\Http\Request;

class SuratJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.laporan.suratJalan");
    }

    /**
     * Show the form for searching surat jalan.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->get('search');

        // Query data sewa berdasarkan nama penyewa, nomor telepon, atau tanggal mulai sewa
        $dataSewa = DataSewa::where('name', 'like', '%'.$search.'%')
                            ->orWhere('no_telp', 'like', '%'.$search.'%')
                            ->orWhereDate('start_date', '=', $search)
                            ->get();

        return view("dashboard.laporan.suratJalan", compact('dataSewa', 'search'));
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
        return view('dashboard.laporan.detailSuratJalan', compact('dataSewa'));
    }

}
