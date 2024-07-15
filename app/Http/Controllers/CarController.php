<?php

namespace App\Http\Controllers;

use App\Models\DataSewa;
use App\Models\Driver;
use App\Models\Mobil;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function home()
    {
        $mobils = Mobil::where('tersedia', true)->get();
        $drivers = Driver::where('tersedia', true)->get();
        return view('layouts.cars.listCars', compact('mobils', 'drivers'));
    }

    public function index()
    {
        $mobils = Mobil::where('tersedia', true)->get();
        $drivers = Driver::where('tersedia', true)->get();
        return view('layouts.cars.carlist', compact('mobils', 'drivers'));
    }

    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        $drivers = Driver::all();
        return view('layouts.cars.detailCars', compact('mobil', 'drivers'));
    }

    public function bookNow(Request $request)
    {
        $request->validate([
            'mobil_id' => 'required|exists:mobils,id',
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_days' => 'required|integer',
            'jarak' => 'required|boolean',
            'delivery_option' => 'required|boolean',
            'name_driver' => 'required|exists:drivers,id',
        ]);

        // Hitung total biaya sewa
        $totalAmount = $this->calculateTotalAmount($request->total_days, $request->jarak, $request->mobil_id);

        // Simpan data sewa
        DataSewa::create([
            'mobil_id' => $request->mobil_id,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_days' => $request->total_days,
            'jarak' => $request->jarak,
            'delivery_option' => $request->delivery_option,
            'name_driver' => $request->name_driver,
            'total_amount' => $totalAmount,
        ]);

        return redirect()->route('cars.index')->with('success', 'Pesanan Anda berhasil diproses!');
    }


    private function calculateTotalAmount($totalDays, $jarak, $mobil_id)
    {
        $mobil = Mobil::findOrFail($mobil_id);
        $hargaSewaPerHari = $mobil->price;
        $totalAmount = $totalDays * $hargaSewaPerHari;

        // Tambahkan biaya tambahan 20% jika jarak adalah luar kota
        if ($jarak) {
            $totalAmount += $totalAmount * 0.2;
        }

        return $totalAmount;
    }
    
    public function completeBooking(Request $request)
    {
        $request->validate([
            'mobil_id' => 'required|exists:data_sewas,id',
            'name' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'total_days' => 'required|integer',
            'jarak' => 'required|boolean',
            'delivery_option' => 'required|boolean',
            'name_driver' => 'required|exists:drivers,id',
            'total_amount' => 'required|numeric',
            'payment_receipt' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        ]);

        $path = $request->file('payment_receipt')->store('bukti_transfer');

        DataSewa::create([
            'mobil_id' => $request->mobil_id,
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'total_days' => $request->total_days,
            'jarak' => $request->jarak,
            'delivery_option' => $request->delivery_option,
            'name_driver' => $request->name_driver,
            'total_amount' => $request->total_amount,
            'payment_receipt' => $path,
        ]);

        return redirect()->route('cars.index')->with('success', 'Booking completed successfully!');
    }

    public function getPrice($mobil_id)
    {
        $mobil = Mobil::find($mobil_id);

        if ($mobil) {
            return response()->json(['price' => $mobil->price]);
        }

        return response()->json(['error' => 'Mobil not found'], 404);
    }
}
