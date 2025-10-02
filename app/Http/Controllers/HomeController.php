<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'Land Clearing',
                'description' => 'Pembersihan lahan untuk berbagai keperluan pembangunan dan konstruksi',
                'icon' => 'fas fa-tree'
            ],
            [
                'title' => 'Penimbunan',
                'description' => 'Layanan penimbunan tanah untuk pemerataan dan persiapan lahan',
                'icon' => 'fas fa-mountain'
            ],
            [
                'title' => 'Pengurukan',
                'description' => 'Pengurukan tanah untuk stabilisasi dan perbaikan permukaan',
                'icon' => 'fas fa-layer-group'
            ],
            [
                'title' => 'Persewaan Excavator',
                'description' => 'Penyewaan excavator dengan operator berpengalaman',
                'icon' => 'fas fa-tools'
            ]
        ];

        return view('pages.home', compact('services'));
    }
}
