<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data analitik untuk kartu statistik
        $totalBarang = Barang::count();
        $barangTersedia = Barang::where('status', 'Tersedia')->count();
        $barangHabis = Barang::where('status', 'Habis')->count();
        $nilaiStok = Barang::sum(DB::raw('harga * jumlah'));

        $barangTerbaru = Barang::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalBarang',
            'barangTersedia',
            'barangHabis',
            'nilaiStok',
            'barangTerbaru'
        ));
    }
}
