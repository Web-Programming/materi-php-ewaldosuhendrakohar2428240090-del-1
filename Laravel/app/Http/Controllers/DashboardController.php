<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk; // Pastikan model Barang sudah dibuat

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data analitik untuk kartu statistik
        $totalBarang = Produk::count();
        $barangTersedia = Produk::where('status', 'Tersedia')->count();
        $barangHabis = Produk::where('status', 'Habis')->count();
        $totalPendapatan = Produk::sum('harga'); 
        
        $barangTerbaru = Produk::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalBarang', 
            'barangTersedia', 
            'barangHabis', 
            'totalPendapatan', 
            'barangTerbaru'
        ));
    }
}