<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']); // hanya admin
    }

    public function index()
    {
          $totalPesan = Pesan::count(); // Total pesan
    $pesans = Pesan::latest()->take(5)->get(); // 5 pesan terakhir

    return view('admin.dashboard.index', compact('totalPesan', 'pesans'));
    }
}
