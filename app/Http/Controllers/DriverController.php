<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = Driver::all();
        return view('dashboard.masterData.dataDriver.index', compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.masterData.dataDriver.create');
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
            'phone_number' => 'required|string|max:255',
            'tersedia' => 'required|boolean',
        ]);

        // Proses menyimpan data ke dalam database
        $dataDriver = new Driver();
        $dataDriver->name = $request->name;
        $dataDriver->phone_number = $request->phone_number;
        $dataDriver->tersedia = $request->tersedia;

        $dataDriver->save();

        // Redirect atau apapun yang Anda perlukan setelah penyimpanan berhasil
        return redirect()->route('dashboard.dataDriver.index')
                         ->with('success', 'Driver berhasil ditambahkan!.');
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
        $dataDriver = Driver::findOrFail($id);

        return view('dashboard.masterData.dataDriver.edit', compact('dataDriver'));
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
            'phone_number' => 'required',
            'tersedia' => 'required',
        ]);
    
        $mobil = Driver::findOrFail($id);
        $mobil->name = $request->name;
        $mobil->phone_number = $request->phone_number;
        $mobil->tersedia = $request->tersedia;
    
        $mobil->save();
    
        return redirect()->route('dashboard.dataDriver.index')
                         ->with('success', 'Driver berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataDriver = Driver::findOrFail($id);

        $dataDriver->delete();

        return redirect()->route('dashboard.dataDriver.index')
                        ->with('success', 'Driver berhasil dihapus.');
    }
}
