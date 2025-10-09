<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'slug' => 'penyiapan-lahan',
                'title' => 'Penyiapan Lahan',
                'description' => 'Layanan persiapan dan pembersihan lahan profesional untuk berbagai kebutuhan pembangunan.',
                'details' => 'Kami menyediakan layanan penyiapan lahan yang komprehensif meliputi pembersihan vegetasi, land clearing, penebangan pohon, pembongkaran struktur lama, dan persiapan lahan untuk konstruksi. Menggunakan peralatan modern dan tenaga ahli berpengalaman.',
                'features' => [
                    'Pembersihan vegetasi dan semak belukar',
                    'Land clearing dan penebangan pohon',
                    'Pembongkaran struktur bangunan lama',
                    'Persiapan lahan untuk konstruksi',
                    'Pemerataan dan grading lahan',
                    'Penanganan limbah organik'
                ],
                'image' => 'penyiapan-lahan.jpg'
            ],
            [
                'slug' => 'konstruksi',
                'title' => 'Konstruksi',
                'description' => 'Layanan konstruksi dan pembangunan infrastruktur dengan standar kualitas tinggi.',
                'details' => 'Layanan konstruksi profesional untuk berbagai jenis proyek pembangunan. Kami menangani pekerjaan konstruksi mulai dari pondasi, struktur bangunan, hingga finishing dengan standar kualitas dan keselamatan kerja yang tinggi.',
                'features' => [
                    'Konstruksi bangunan dan infrastruktur',
                    'Pekerjaan tanah dan pondasi',
                    'Pembangunan jalan dan drainase',
                    'Konstruksi landscape dan hardscape',
                    'Project management profesional',
                    'Quality control dan safety management'
                ],
                'image' => 'konstruksi.jpg'
            ],
            [
                'slug' => 'sewa-alat-konstruksi',
                'title' => 'Sewa Alat Konstruksi',
                'description' => 'Penyewaan alat konstruksi dengan berbagai jenis dan kapasitas, dilengkapi operator berpengalaman.',
                'details' => 'Kami menyediakan layanan sewa alat konstruksi dengan kondisi prima dan operator bersertifikat. Tersedia berbagai jenis alat konstruksi seperti excavator, bulldozer, wheel loader, dan alat berat lainnya sesuai kebutuhan proyek Anda.',
                'features' => [
                    'Excavator berbagai ukuran (PC50-PC200)',
                    'Bulldozer dan wheel loader',
                    'Dump truck dan concrete mixer',
                    'Operator berpengalaman dan tersertifikat',
                    'Perawatan rutin dan kondisi prima',
                    'Fleksibilitas waktu sewa',
                    'Support teknis 24/7'
                ],
                'image' => 'alat-konstruksi.jpg'
            ]
        ];

        return view('pages.products', compact('products'));
    }

    public function show($slug)
    {
        $products = [
            'penyiapan-lahan' => [
                'slug' => 'penyiapan-lahan',
                'title' => 'Penyiapan Lahan',
                'description' => 'Layanan persiapan dan pembersihan lahan profesional untuk berbagai kebutuhan pembangunan.',
                'details' => 'Kami menyediakan layanan penyiapan lahan yang komprehensif meliputi pembersihan vegetasi, land clearing, penebangan pohon, pembongkaran struktur lama, dan persiapan lahan untuk konstruksi. Menggunakan peralatan modern dan tenaga ahli berpengalaman.',
                'features' => [
                    'Pembersihan vegetasi dan semak belukar',
                    'Land clearing dan penebangan pohon',
                    'Pembongkaran struktur bangunan lama',
                    'Persiapan lahan untuk konstruksi',
                    'Pemerataan dan grading lahan',
                    'Penanganan limbah organik'
                ],
                'image' => 'penyiapan-lahan.jpg'
            ],
            'konstruksi' => [
                'slug' => 'konstruksi',
                'title' => 'Konstruksi',
                'description' => 'Layanan konstruksi dan pembangunan infrastruktur dengan standar kualitas tinggi.',
                'details' => 'Layanan konstruksi profesional untuk berbagai jenis proyek pembangunan. Kami menangani pekerjaan konstruksi mulai dari pondasi, struktur bangunan, hingga finishing dengan standar kualitas dan keselamatan kerja yang tinggi.',
                'features' => [
                    'Konstruksi bangunan dan infrastruktur',
                    'Pekerjaan tanah dan pondasi',
                    'Pembangunan jalan dan drainase',
                    'Konstruksi landscape dan hardscape',
                    'Project management profesional',
                    'Quality control dan safety management'
                ],
                'image' => 'konstruksi.jpg'
            ],
            'sewa-alat-konstruksi' => [
                'slug' => 'sewa-alat-konstruksi',
                'title' => 'Sewa Alat Konstruksi',
                'description' => 'Penyewaan alat konstruksi dengan berbagai jenis dan kapasitas, dilengkapi operator berpengalaman.',
                'details' => 'Kami menyediakan layanan sewa alat konstruksi dengan kondisi prima dan operator bersertifikat. Tersedia berbagai jenis alat konstruksi seperti excavator, bulldozer, wheel loader, dan alat berat lainnya sesuai kebutuhan proyek Anda.',
                'features' => [
                    'Excavator berbagai ukuran (PC50-PC200)',
                    'Bulldozer dan wheel loader',
                    'Dump truck dan concrete mixer',
                    'Operator berpengalaman dan tersertifikat',
                    'Perawatan rutin dan kondisi prima',
                    'Fleksibilitas waktu sewa',
                    'Support teknis 24/7'
                ],
                'image' => 'alat-konstruksi.jpg'
            ]
        ];

        $product = $products[$slug] ?? null;

        if (!$product) {
            abort(404);
        }

        return view('pages.product-detail', compact('product'));
    }
}
