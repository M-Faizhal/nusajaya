<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'slug' => 'land-clearing',
                'title' => 'Land Clearing',
                'description' => 'Layanan pembersihan lahan profesional untuk berbagai kebutuhan konstruksi dan pembangunan.',
                'details' => 'Kami menyediakan layanan land clearing yang komprehensif meliputi pembersihan vegetasi, penebangan pohon, pembongkaran struktur lama, dan persiapan lahan untuk konstruksi. Menggunakan peralatan modern dan tenaga ahli berpengalaman.',
                'features' => [
                    'Pembersihan vegetasi dan semak belukar',
                    'Penebangan pohon dengan teknik yang aman',
                    'Pembongkaran struktur bangunan lama',
                    'Persiapan lahan untuk konstruksi',
                    'Penanganan limbah organik'
                ],
                'image' => 'land-clearing.jpg'
            ],
            [
                'slug' => 'penimbunan',
                'title' => 'Penimbunan',
                'description' => 'Jasa penimbunan tanah untuk pemerataan lahan dan pembentukan kontur sesuai kebutuhan proyek.',
                'details' => 'Layanan penimbunan profesional menggunakan material berkualitas dan teknik yang tepat. Kami memastikan kepadatan dan stabilitas tanah sesuai standar konstruksi untuk berbagai jenis proyek.',
                'features' => [
                    'Penimbunan tanah untuk pemerataan lahan',
                    'Pembentukan kontur sesuai desain',
                    'Penggunaan material tanah berkualitas',
                    'Pemadatan dengan alat berat',
                    'Quality control kepadatan tanah'
                ],
                'image' => 'penimbunan.jpg'
            ],
            [
                'slug' => 'pengurukan',
                'title' => 'Pengurukan',
                'description' => 'Layanan pengurukan untuk stabilisasi tanah dan perbaikan permukaan dengan standar kualitas tinggi.',
                'details' => 'Pengurukan dilakukan dengan material pilihan dan teknik yang sesuai standar engineering. Proses ini penting untuk memastikan stabilitas dan daya dukung tanah untuk konstruksi di atasnya.',
                'features' => [
                    'Pengurukan dengan material berkualitas',
                    'Stabilisasi tanah lemah',
                    'Perbaikan permukaan tidak rata',
                    'Pengurukan di area basah/rawa',
                    'Kontrol elevasi sesuai rencana'
                ],
                'image' => 'pengurukan.jpg'
            ],
            [
                'slug' => 'persewaan-excavator',
                'title' => 'Persewaan Excavator',
                'description' => 'Penyewaan excavator dengan berbagai ukuran dan kapasitas, dilengkapi operator berpengalaman.',
                'details' => 'Kami menyediakan layanan persewaan excavator dengan kondisi prima dan operator bersertifikat. Tersedia berbagai jenis dan ukuran excavator sesuai kebutuhan proyek Anda.',
                'features' => [
                    'Excavator berbagai ukuran (PC50-PC200)',
                    'Operator berpengalaman dan tersertifikat',
                    'Perawatan rutin dan kondisi prima',
                    'Fleksibilitas waktu sewa',
                    'Support teknis 24/7'
                ],
                'image' => 'excavator.jpg'
            ]
        ];

        return view('pages.products', compact('products'));
    }

    public function show($slug)
    {
        $products = [
            'land-clearing' => [
                'slug' => 'land-clearing',
                'title' => 'Land Clearing',
                'description' => 'Layanan pembersihan lahan profesional untuk berbagai kebutuhan konstruksi dan pembangunan.',
                'details' => 'Kami menyediakan layanan land clearing yang komprehensif meliputi pembersihan vegetasi, penebangan pohon, pembongkaran struktur lama, dan persiapan lahan untuk konstruksi. Menggunakan peralatan modern dan tenaga ahli berpengalaman.',
                'features' => [
                    'Pembersihan vegetasi dan semak belukar',
                    'Penebangan pohon dengan teknik yang aman',
                    'Pembongkaran struktur bangunan lama',
                    'Persiapan lahan untuk konstruksi',
                    'Penanganan limbah organik'
                ],
                'image' => 'land-clearing.jpg'
            ],
            'penimbunan' => [
                'slug' => 'penimbunan',
                'title' => 'Penimbunan',
                'description' => 'Jasa penimbunan tanah untuk pemerataan lahan dan pembentukan kontur sesuai kebutuhan proyek.',
                'details' => 'Layanan penimbunan profesional menggunakan material berkualitas dan teknik yang tepat. Kami memastikan kepadatan dan stabilitas tanah sesuai standar konstruksi untuk berbagai jenis proyek.',
                'features' => [
                    'Penimbunan tanah untuk pemerataan lahan',
                    'Pembentukan kontur sesuai desain',
                    'Penggunaan material tanah berkualitas',
                    'Pemadatan dengan alat berat',
                    'Quality control kepadatan tanah'
                ],
                'image' => 'penimbunan.jpg'
            ],
            'pengurukan' => [
                'slug' => 'pengurukan',
                'title' => 'Pengurukan',
                'description' => 'Layanan pengurukan untuk stabilisasi tanah dan perbaikan permukaan dengan standar kualitas tinggi.',
                'details' => 'Pengurukan dilakukan dengan material pilihan dan teknik yang sesuai standar engineering. Proses ini penting untuk memastikan stabilitas dan daya dukung tanah untuk konstruksi di atasnya.',
                'features' => [
                    'Pengurukan dengan material berkualitas',
                    'Stabilisasi tanah lemah',
                    'Perbaikan permukaan tidak rata',
                    'Pengurukan di area basah/rawa',
                    'Kontrol elevasi sesuai rencana'
                ],
                'image' => 'pengurukan.jpg'
            ],
            'persewaan-excavator' => [
                'slug' => 'persewaan-excavator',
                'title' => 'Persewaan Excavator',
                'description' => 'Penyewaan excavator dengan berbagai ukuran dan kapasitas, dilengkapi operator berpengalaman.',
                'details' => 'Kami menyediakan layanan persewaan excavator dengan kondisi prima dan operator bersertifikat. Tersedia berbagai jenis dan ukuran excavator sesuai kebutuhan proyek Anda.',
                'features' => [
                    'Excavator berbagai ukuran (PC50-PC200)',
                    'Operator berpengalaman dan tersertifikat',
                    'Perawatan rutin dan kondisi prima',
                    'Fleksibilitas waktu sewa',
                    'Support teknis 24/7'
                ],
                'image' => 'excavator.jpg'
            ]
        ];

        $product = $products[$slug] ?? null;

        if (!$product) {
            abort(404);
        }

        return view('pages.product-detail', compact('product'));
    }
}
