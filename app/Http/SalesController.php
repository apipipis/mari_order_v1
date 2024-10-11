<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        // Contoh data penjualan bulanan (bisa berasal dari database)
        $salesData = [
            'months' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            'sales' => [100, 120, 150, 170, 90, 160, 180, 200, 220, 230, 190, 210]
        ];

        return view('dashboard', compact('salesData'));
    }
}
