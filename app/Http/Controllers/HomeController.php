<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah;

class HomeController extends Controller
{
    public function index()
    {
        // Get statistics
        $totalRumah = Rumah::count();
        $rumahTerisi = Rumah::where('status', 'terisi')->count();
        $rumahKosong = Rumah::where('status', 'kosong')->count();
        
        // Get houses grouped by blok
        $rumahsByBlok = Rumah::all()->groupBy('blok');
        
        // Calculate percentage for each blok
        $blokStats = [];
        foreach ($rumahsByBlok as $blok => $rumahs) {
            $total = $rumahs->count();
            $terisi = $rumahs->where('status', 'terisi')->count();
            $percentage = $total > 0 ? round(($terisi / $total) * 100) : 0;
            
            $blokStats[$blok] = [
                'rumahs' => $rumahs,
                'total' => $total,
                'terisi' => $terisi,
                'kosong' => $total - $terisi,
                'percentage' => $percentage
            ];
        }
        
        return view('home', compact(
            'totalRumah',
            'rumahTerisi', 
            'rumahKosong',
            'blokStats'
        ));
    }
}
