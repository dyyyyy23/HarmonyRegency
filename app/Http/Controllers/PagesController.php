<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class PagesController extends Controller
{
    // Halaman Home (jika ada)
    public function index()
    {
        return view('pages.home');
    }

    // Halaman Berita Publik (yang error tadi)
    public function berita()
    {
        // Ambil semua data berita dari database (bisa diurutkan terbaru)
        $beritas = Berita::orderBy('tanggal', 'desc')->get();

        // Kirim ke view resources/views/pages/berita.blade.php
        return view('pages.berita', compact('beritas'));
    }

    // Tambah function lain sesuai kebutuhan, misal detail berita
    // public function beritaShow($id) {
    //     $berita = Berita::findOrFail($id);
    //     return view('pages.berita-show', compact('berita'));
    // }
}
