<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all(); // Ambil semua data mobil dari database
        return view('dashboard.masterData.mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.masterData.mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'nopol' => 'required|string|max:20',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tersedia' => 'required|boolean',
        ]);

        // Proses menyimpan data ke dalam database
        $dataMobil = new Mobil();
        $dataMobil->name = $request->name;
        $dataMobil->brand = $request->brand;
        $dataMobil->nopol = $request->nopol;
        $dataMobil->price = $request->price;
        $dataMobil->tersedia = $request->tersedia;

        // Upload gambar jika ada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $dataMobil->image = 'images/' . $imageName;
        }

        $dataMobil->save();

        return redirect()->route('dashboard.dataMobil.index')
                         ->with('success', 'Data mobil berhasil ditambahkan!.');
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
        $mobil = Mobil::findOrFail($id);

        return view('dashboard.masterData.mobil.edit', compact('mobil'));
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
            'brand' => 'required',
            'nopol' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tersedia' => 'required',
        ]);
    
        $mobil = Mobil::findOrFail($id);
        $mobil->name = $request->name;
        $mobil->brand = $request->brand;
        $mobil->nopol = $request->nopol;
        $mobil->price = $request->price;
        $mobil->tersedia = $request->tersedia;
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $imageName = time() . '_' . $imagePath->getClientOriginalName();
            $imagePath->move(public_path('images'), $imageName);
            $mobil->image = 'images/' . $imageName;
        }
    
        $mobil->save();
    
        return redirect()->route('dashboard.dataMobil.index')
                         ->with('success', 'Data mobil berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
    
        // Hapus gambar terkait jika ada (opsional)
        if ($mobil->image) {
            Storage::delete($mobil->image); // Menghapus gambar dari storage jika menggunakan Storage
            // atau unlink(public_path('images/' . $mobil->image)); // Menghapus gambar dari public folder jika tanpa Storage
        }

        $mobil->delete();

        return redirect()->route('dashboard.dataMobil.index')
                        ->with('success', 'Data mobil berhasil dihapus.');
    }
}
