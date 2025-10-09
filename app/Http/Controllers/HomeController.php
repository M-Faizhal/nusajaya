<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Penyiapan Lahan',
                'description' => 'Persiapan dan pembersihan lahan untuk berbagai keperluan pembangunan',
                'icon' => 'fas fa-tree'
            ],
            [
                'title' => 'Konstruksi',
                'description' => 'Layanan konstruksi dan pembangunan infrastruktur berkualitas',
                'icon' => 'fas fa-layer-group'
            ],
            [
                'title' => 'Sewa Alat Konstruksi',
                'description' => 'Penyewaan alat konstruksi dengan operator berpengalaman',
                'icon' => 'fas fa-tools'
            ]
        ];

        return view('pages.home', compact('services'));
    }
}
