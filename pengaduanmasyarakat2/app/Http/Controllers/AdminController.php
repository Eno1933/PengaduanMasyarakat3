<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengaduan; // Sesuaikan dengan Model Anda
use PDF;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        // Query awal dengan relasi masyarakat
        $query = Pengaduan::with('masyarakat');

        // Perbaikan: Hanya filter jika filter_status memiliki nilai
        if ($request->filled('filter_status')) {
            $query->where('status', $request->filter_status);
        }

        // Tambahkan paginasi untuk membatasi data per halaman
        $pengaduan = $query->paginate(10);

        // Return ke view dengan data laporan
        return view('admin.dashboard', [
            'pengaduan' => $pengaduan,
            'filter_status' => $request->filter_status ?? '' 
        ]);
        
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('tgl_pengaduan', [$request->start_date, $request->end_date]);
        }
        
    }

    public function generatePdf()
    {
        // 1. Ambil data pengaduan (sesuaikan query sesuai kebutuhan)
        $pengaduan = Pengaduan::with('masyarakat')->get();

        // 2. Load view khusus PDF, lalu kirim data
        $pdf = PDF::loadView('admin.laporan-pdf', compact('pengaduan'));

        // 3. Return file PDF ke browser (langsung download atau tampilkan di tab baru)
        // return $pdf->download('laporan-pengaduan.pdf'); // jika ingin langsung download
        return $pdf->stream('laporan-pengaduan.pdf');     // jika ingin tampil di browser
    }

}
