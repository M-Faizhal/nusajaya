<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'slug' => 'tips-land-clearing-efektif',
                'title' => 'Tips Land Clearing yang Efektif dan Ramah Lingkungan',
                'excerpt' => 'Pelajari teknik-teknik terbaru dalam land clearing yang tidak hanya efektif tetapi juga memperhatikan kelestarian lingkungan.',
                'content' => 'Land clearing merupakan langkah awal yang penting dalam setiap proyek konstruksi. Proses ini memerlukan perencanaan yang matang dan teknik yang tepat untuk memastikan hasil yang optimal sambil meminimalkan dampak terhadap lingkungan...',
                'author' => 'Tim Ahli Nusajaya',
                'date' => '2024-03-15',
                'category' => 'Tips & Tricks',
                'image' => 'blog-1.jpg'
            ],
            [
                'slug' => 'memilih-excavator-yang-tepat',
                'title' => 'Panduan Memilih Excavator yang Tepat untuk Proyek Anda',
                'excerpt' => 'Berbagai jenis excavator memiliki keunggulan masing-masing. Pahami cara memilih yang paling sesuai dengan kebutuhan proyek.',
                'content' => 'Excavator merupakan alat berat yang sangat penting dalam industri konstruksi dan pertambangan. Pemilihan jenis excavator yang tepat akan sangat mempengaruhi efisiensi dan hasil kerja proyek Anda...',
                'author' => 'Budi Santoso',
                'date' => '2024-03-10',
                'category' => 'Equipment',
                'image' => 'blog-2.jpg'
            ],
            [
                'slug' => 'standar-keselamatan-konstruksi',
                'title' => 'Standar Keselamatan dalam Pekerjaan Konstruksi',
                'excerpt' => 'Keselamatan kerja adalah prioritas utama. Ketahui standar dan prosedur keselamatan yang harus diterapkan di lokasi konstruksi.',
                'content' => 'Keselamatan kerja di lokasi konstruksi bukan hanya tanggung jawab perusahaan, tetapi juga setiap individu yang terlibat dalam proyek. Penerapan standar keselamatan yang ketat dapat mencegah kecelakaan kerja...',
                'author' => 'Sari Indah',
                'date' => '2024-03-05',
                'category' => 'Safety',
                'image' => 'blog-3.jpg'
            ],
            [
                'slug' => 'teknologi-terbaru-konstruksi',
                'title' => 'Teknologi Terbaru dalam Industri Konstruksi',
                'excerpt' => 'Perkembangan teknologi membawa inovasi baru dalam industri konstruksi. Mari eksplorasi teknologi yang mengubah cara kerja kita.',
                'content' => 'Industri konstruksi terus berkembang dengan adopsi teknologi baru yang membantu meningkatkan efisiensi, akurasi, dan keselamatan kerja. Dari penggunaan drone untuk survei hingga IoT untuk monitoring...',
                'author' => 'Ahmad Wijaya',
                'date' => '2024-02-28',
                'category' => 'Technology',
                'image' => 'blog-4.jpg'
            ]
        ];

        return view('pages.artikel', compact('articles'));
    }

    public function show($slug)
    {
        $articles = [
            'tips-land-clearing-efektif' => [
                'slug' => 'tips-land-clearing-efektif',
                'title' => 'Tips Land Clearing yang Efektif dan Ramah Lingkungan',
                'content' => '<p class="lead">Land clearing merupakan langkah awal yang penting dalam setiap proyek konstruksi. Proses ini memerlukan perencanaan yang matang dan teknik yang tepat untuk memastikan hasil yang optimal sambil meminimalkan dampak terhadap lingkungan.</p>

<h2>Perencanaan yang Matang</h2>

<p>Sebelum memulai pekerjaan land clearing, perencanaan yang detail sangat diperlukan. Ini meliputi:</p>

<ul>
<li><strong>Survey lokasi</strong> untuk memahami kondisi tanah dan vegetasi</li>
<li><strong>Identifikasi pohon dan vegetasi</strong> yang perlu dipertahankan</li>
<li><strong>Perencanaan jalur akses</strong> untuk alat berat</li>
<li><strong>Perhitungan volume material</strong> yang akan dihasilkan</li>
</ul>

<h2>Teknik Pembersihan yang Efektif</h2>

<h3>1. Pembersihan Bertahap</h3>
<p>Lakukan pembersihan secara bertahap, mulai dari vegetasi kecil hingga pohon besar. Hal ini memudahkan akses alat berat dan mengurangi risiko kerusakan.</p>

<h3>2. Penggunaan Alat yang Tepat</h3>
<ul>
<li><strong>Excavator</strong> untuk penebangan pohon besar</li>
<li><strong>Bulldozer</strong> untuk mendorong material</li>
<li><strong>Mulcher</strong> untuk menghancurkan material organik</li>
</ul>

<h3>3. Penanganan Material Organik</h3>
<p>Material organik hasil land clearing dapat diolah menjadi:</p>
<ul>
<li>Kompos untuk pupuk organik</li>
<li>Biomassa untuk energi alternatif</li>
<li>Material landfill yang ramah lingkungan</li>
</ul>

<h2>Aspek Lingkungan</h2>

<h3>Pelestarian Ekosistem</h3>
<ul>
<li>Identifikasi dan lindungi habitat satwa langka</li>
<li>Pertahankan zona penyangga di sekitar sumber air</li>
<li>Replanting di area yang memungkinkan</li>
</ul>

<h3>Pengelolaan Erosi</h3>
<ul>
<li>Buat drainage system sementara</li>
<li>Gunakan erosion control measures</li>
<li>Monitor kualitas air di sekitar lokasi</li>
</ul>

<h2>Kesimpulan</h2>

<p>Land clearing yang efektif memerlukan keseimbangan antara efisiensi kerja dan tanggung jawab lingkungan. Dengan perencanaan yang matang dan teknik yang tepat, kita dapat mencapai hasil yang optimal sambil menjaga kelestarian lingkungan.</p>',
                'author' => 'Tim Ahli Nusajaya',
                'date' => '2024-03-15',
                'category' => 'Tips & Tricks',
                'image' => 'blog-1.jpg'
            ],
            'memilih-excavator-yang-tepat' => [
                'slug' => 'memilih-excavator-yang-tepat',
                'title' => 'Panduan Memilih Excavator yang Tepat untuk Proyek Anda',
                'content' => '<p class="lead">Excavator merupakan alat berat yang sangat penting dalam industri konstruksi dan pertambangan. Pemilihan jenis excavator yang tepat akan sangat mempengaruhi efisiensi dan hasil kerja proyek Anda.</p>

<h2>Jenis-Jenis Excavator</h2>

<h3>1. Mini Excavator (1-6 ton)</h3>
<div class="alert alert-success">
<p><strong>Keunggulan:</strong></p>
<ul>
<li>Mobilitas tinggi di area terbatas</li>
<li>Konsumsi bahan bakar efisien</li>
<li>Cocok untuk proyek residensial</li>
</ul>
<p><strong>Aplikasi:</strong> Landscaping, Utility work, Pekerjaan di area sempit</p>
</div>

<h3>2. Medium Excavator (6-45 ton)</h3>
<div class="alert alert-info">
<p><strong>Keunggulan:</strong></p>
<ul>
<li>Versatilitas tinggi</li>
<li>Balance antara power dan mobilitas</li>
<li>Tersedia berbagai attachment</li>
</ul>
<p><strong>Aplikasi:</strong> Road construction, Building construction, Drainage work</p>
</div>

<h3>3. Large Excavator (45+ ton)</h3>
<div class="alert alert-warning">
<p><strong>Keunggulan:</strong></p>
<ul>
<li>Power besar untuk material heavy-duty</li>
<li>Productivity tinggi</li>
<li>Cocok untuk proyek skala besar</li>
</ul>
<p><strong>Aplikasi:</strong> Mining operation, Large infrastructure, Mass excavation</p>
</div>

<h2>Faktor Pemilihan</h2>

<h3>1. Skala Proyek</h3>
<ul>
<li><strong>Proyek kecil:</strong> Mini excavator</li>
<li><strong>Proyek menengah:</strong> Medium excavator</li>
<li><strong>Proyek besar:</strong> Large excavator</li>
</ul>

<h3>2. Kondisi Lokasi</h3>
<ul>
<li><strong>Area terbatas:</strong> Pilih unit compact</li>
<li><strong>Ground condition:</strong> Pertimbangkan track atau wheel</li>
<li><strong>Akses jalan:</strong> Sesuaikan dengan transportasi</li>
</ul>

<h3>3. Jenis Pekerjaan</h3>
<ul>
<li><strong>Digging:</strong> Prioritaskan digging force</li>
<li><strong>Loading:</strong> Fokus pada cycle time</li>
<li><strong>Demolition:</strong> Pertimbangkan specialized attachment</li>
</ul>

<h3>4. Budget dan Durasi</h3>
<ul>
<li><strong>Proyek jangka pendek:</strong> Rental lebih ekonomis</li>
<li><strong>Proyek jangka panjang:</strong> Pertimbangkan pembelian</li>
<li><strong>Budget terbatas:</strong> Pilih unit bekas berkualitas</li>
</ul>

<h2>Tips Operasional</h2>

<h3>Maintenance Rutin</h3>
<ul>
<li>Daily inspection sebelum operasi</li>
<li>Scheduled maintenance sesuai manual</li>
<li>Monitor fluid levels dan wear parts</li>
</ul>

<h3>Operator Training</h3>
<ul>
<li>Pastikan operator bersertifikat</li>
<li>Regular training untuk safety procedure</li>
<li>Familiarisasi dengan unit spesifik</li>
</ul>

<h3>Fuel Efficiency</h3>
<ul>
<li>Gunakan eco mode saat memungkinkan</li>
<li>Avoid unnecessary idling</li>
<li>Regular maintenance untuk optimal performance</li>
</ul>

<h2>Kesimpulan</h2>

<p>Pemilihan excavator yang tepat memerlukan pertimbangan berbagai faktor. Konsultasikan dengan ahli untuk mendapatkan rekomendasi yang sesuai dengan kebutuhan spesifik proyek Anda.</p>',
                'author' => 'Budi Santoso',
                'date' => '2024-03-10',
                'category' => 'Equipment',
                'image' => 'blog-2.jpg'
            ],
            'standar-keselamatan-konstruksi' => [
                'slug' => 'standar-keselamatan-konstruksi',
                'title' => 'Standar Keselamatan dalam Pekerjaan Konstruksi',
                'content' => '<p class="lead">Keselamatan kerja di lokasi konstruksi bukan hanya tanggung jawab perusahaan, tetapi juga setiap individu yang terlibat dalam proyek. Penerapan standar keselamatan yang ketat dapat mencegah kecelakaan kerja dan memastikan kelancaran proyek.</p>

<h2>Dasar-Dasar K3 Konstruksi</h2>

<h3>Prinsip Hierarki Kontrol Bahaya</h3>
<ol>
<li><strong>Eliminasi:</strong> Menghilangkan bahaya dari sumbernya</li>
<li><strong>Substitusi:</strong> Mengganti dengan alternatif yang lebih aman</li>
<li><strong>Engineering Control:</strong> Kontrol teknis untuk isolasi bahaya</li>
<li><strong>Administrative Control:</strong> Prosedur dan training</li>
<li><strong>PPE:</strong> Personal Protective Equipment sebagai lini terakhir</li>
</ol>

<h2>Personal Protective Equipment (PPE)</h2>

<h3>PPE Wajib di Konstruksi</h3>
<div class="row">
<div class="col-md-6">
<ul>
<li><strong>Safety Helmet:</strong> Melindungi kepala dari benturan</li>
<li><strong>Safety Shoes:</strong> Perlindungan kaki dari tusukan dan benturan</li>
<li><strong>High-Vis Vest:</strong> Meningkatkan visibility</li>
</ul>
</div>
<div class="col-md-6">
<ul>
<li><strong>Safety Glasses:</strong> Perlindungan mata dari debu dan debris</li>
<li><strong>Work Gloves:</strong> Perlindungan tangan sesuai jenis pekerjaan</li>
</ul>
</div>
</div>

<h3>PPE Khusus</h3>
<ul>
<li><strong>Fall Protection:</strong> Harness dan lanyard untuk work at height</li>
<li><strong>Respiratory Protection:</strong> Masker untuk area berdebu</li>
<li><strong>Hearing Protection:</strong> Ear plug di area bising</li>
</ul>

<h2>Hazard Identification</h2>

<h3>Bahaya Umum di Konstruksi</h3>

<div class="card mb-3">
<div class="card-body">
<h5 class="card-title">1. Struck-by Hazards</h5>
<ul>
<li>Falling objects</li>
<li>Moving equipment</li>
<li>Flying particles</li>
</ul>
</div>
</div>

<div class="card mb-3">
<div class="card-body">
<h5 class="card-title">2. Caught-in/between Hazards</h5>
<ul>
<li>Trench collapse</li>
<li>Equipment entanglement</li>
<li>Structural collapse</li>
</ul>
</div>
</div>

<div class="card mb-3">
<div class="card-body">
<h5 class="card-title">3. Fall Hazards</h5>
<ul>
<li>Unprotected edges</li>
<li>Ladder accidents</li>
<li>Scaffold failures</li>
</ul>
</div>
</div>

<div class="card mb-3">
<div class="card-body">
<h5 class="card-title">4. Electrical Hazards</h5>
<ul>
<li>Power lines</li>
<li>Faulty equipment</li>
<li>Wet conditions</li>
</ul>
</div>
</div>

<h2>Safety Procedures</h2>

<h3>Pre-Work Safety Briefing</h3>
<ul>
<li>Review hari ini dan identifikasi bahaya</li>
<li>Diskusi method statement</li>
<li>Emergency response plan</li>
<li>Weather conditions assessment</li>
</ul>

<h3>Equipment Safety</h3>
<ul>
<li>Daily inspection checklist</li>
<li>Proper maintenance schedule</li>
<li>Operator certification requirements</li>
<li>Safe operating procedures</li>
</ul>

<h3>Site Safety Management</h3>
<ul>
<li>Safety signage dan barrier</li>
<li>Traffic management plan</li>
<li>Emergency evacuation routes</li>
<li>First aid facilities</li>
</ul>

<h2>Emergency Response</h2>

<h3>Emergency Action Plan</h3>
<ul>
<li>Emergency contact numbers</li>
<li>Evacuation procedures</li>
<li>Assembly points</li>
<li>Communication methods</li>
</ul>

<h3>Incident Reporting</h3>
<ul>
<li>Immediate response procedures</li>
<li>Investigation methodology</li>
<li>Corrective action implementation</li>
<li>Lesson learned documentation</li>
</ul>

<h2>Safety Culture</h2>

<h3>Management Commitment</h3>
<ul>
<li>Safety policy implementation</li>
<li>Resource allocation for safety</li>
<li>Regular safety audits</li>
<li>Recognition programs</li>
</ul>

<h3>Worker Participation</h3>
<ul>
<li>Safety suggestion system</li>
<li>Hazard reporting encouragement</li>
<li>Safety training participation</li>
<li>Peer safety monitoring</li>
</ul>

<h2>Kesimpulan</h2>

<p>Keselamatan konstruksi memerlukan komitmen dari semua level organisasi. Dengan implementasi standar keselamatan yang konsisten dan budaya safety yang kuat, kita dapat menciptakan lingkungan kerja yang aman dan produktif.</p>',
                'author' => 'Sari Indah',
                'date' => '2024-03-05',
                'category' => 'Safety',
                'image' => 'blog-3.jpg'
            ],
            'teknologi-terbaru-konstruksi' => [
                'slug' => 'teknologi-terbaru-konstruksi',
                'title' => 'Teknologi Terbaru dalam Industri Konstruksi',
                'content' => '<p class="lead">Industri konstruksi terus berkembang dengan adopsi teknologi baru yang membantu meningkatkan efisiensi, akurasi, dan keselamatan kerja. Dari penggunaan drone untuk survei hingga IoT untuk monitoring, mari kita eksplorasi teknologi yang mengubah cara kerja kita.</p>

<h2>Drone Technology</h2>

<h3>Aplikasi Drone dalam Konstruksi</h3>
<ul>
<li><strong>Site Survey:</strong> Mapping dan topografi akurat</li>
<li><strong>Progress Monitoring:</strong> Dokumentasi kemajuan proyek</li>
<li><strong>Safety Inspection:</strong> Inspeksi area berbahaya</li>
<li><strong>Volume Calculation:</strong> Perhitungan material stockpile</li>
</ul>

<div class="alert alert-info">
<h5>Keunggulan Drone</h5>
<ul class="mb-0">
<li>Efisiensi waktu survei meningkat 90%</li>
<li>Akurasi data hingga centimeter level</li>
<li>Dokumentasi visual yang komprehensif</li>
<li>Mengurangi risiko keselamatan pekerja</li>
</ul>
</div>

<h2>Building Information Modeling (BIM)</h2>

<h3>Manfaat BIM</h3>
<ul>
<li><strong>Visualization:</strong> 3D modeling untuk better understanding</li>
<li><strong>Collaboration:</strong> Platform terpusat untuk semua stakeholder</li>
<li><strong>Clash Detection:</strong> Identifikasi konflik sebelum konstruksi</li>
<li><strong>Quantity Take-off:</strong> Perhitungan material otomatis</li>
</ul>

<h3>BIM 4D dan 5D</h3>
<ul>
<li><strong>4D BIM:</strong> Integrasi dengan scheduling</li>
<li><strong>5D BIM:</strong> Integrasi dengan cost management</li>
<li><strong>Real-time Updates:</strong> Sinkronisasi dengan progress aktual</li>
</ul>

<h2>Internet of Things (IoT)</h2>

<h3>Smart Construction Site</h3>
<ul>
<li><strong>Equipment Monitoring:</strong> Real-time status alat berat</li>
<li><strong>Environmental Sensors:</strong> Monitoring cuaca dan kualitas udara</li>
<li><strong>Worker Safety:</strong> Wearable device untuk safety monitoring</li>
<li><strong>Material Tracking:</strong> RFID untuk inventory management</li>
</ul>

<h3>Predictive Maintenance</h3>
<div class="card">
<div class="card-body">
<ul class="mb-0">
<li>Sensor monitoring untuk early warning</li>
<li>Maintenance scheduling berbasis data</li>
<li>Reduced downtime dan repair cost</li>
<li>Extended equipment lifespan</li>
</ul>
</div>
</div>

<h2>Artificial Intelligence & Machine Learning</h2>

<h3>AI Applications</h3>
<ul>
<li><strong>Predictive Analytics:</strong> Forecasting project risks</li>
<li><strong>Quality Control:</strong> Automated defect detection</li>
<li><strong>Safety Monitoring:</strong> Computer vision for safety compliance</li>
<li><strong>Resource Optimization:</strong> AI-driven scheduling</li>
</ul>

<h3>Machine Learning Benefits</h3>
<ul>
<li>Pattern recognition dari historical data</li>
<li>Continuous improvement through learning</li>
<li>Automated decision making</li>
<li>Risk mitigation strategies</li>
</ul>

<h2>Mobile Technology</h2>

<h3>Construction Apps</h3>
<ul>
<li><strong>Project Management:</strong> Real-time collaboration tools</li>
<li><strong>Quality Assurance:</strong> Digital checklists dan forms</li>
<li><strong>Time Tracking:</strong> Automated timesheet</li>
<li><strong>Communication:</strong> Instant messaging dan video calls</li>
</ul>

<h3>Cloud Integration</h3>
<ul>
<li>Real-time data synchronization</li>
<li>Remote access capabilities</li>
<li>Centralized document management</li>
<li>Backup dan disaster recovery</li>
</ul>

<h2>Augmented Reality (AR) & Virtual Reality (VR)</h2>

<h3>AR Applications</h3>
<ul>
<li><strong>On-site Visualization:</strong> Overlay digital models pada real world</li>
<li><strong>Training:</strong> Interactive learning experience</li>
<li><strong>Maintenance:</strong> Step-by-step guidance</li>
<li><strong>Quality Control:</strong> Compare as-built vs design</li>
</ul>

<h3>VR Applications</h3>
<ul>
<li><strong>Design Review:</strong> Immersive model walkthrough</li>
<li><strong>Safety Training:</strong> Virtual hazard scenarios</li>
<li><strong>Client Presentation:</strong> Realistic project visualization</li>
<li><strong>Remote Collaboration:</strong> Virtual meetings</li>
</ul>

<h2>Advanced Materials & Equipment</h2>

<h3>Smart Materials</h3>
<div class="row">
<div class="col-md-6">
<ul>
<li>Self-healing concrete</li>
<li>Phase-change materials untuk energy efficiency</li>
</ul>
</div>
<div class="col-md-6">
<ul>
<li>Smart glass dengan variable transparency</li>
<li>Lightweight composite materials</li>
</ul>
</div>
</div>

<h3>Autonomous Equipment</h3>
<ul>
<li>Self-driving dump trucks</li>
<li>Automated excavators</li>
<li>Robotic bricklaying</li>
<li>3D printing construction</li>
</ul>

<h2>Implementation Strategy</h2>

<h3>Adoption Roadmap</h3>
<ol>
<li><strong>Assessment:</strong> Evaluate current technology landscape</li>
<li><strong>Pilot Projects:</strong> Start dengan small-scale implementation</li>
<li><strong>Training:</strong> Staff development untuk new technologies</li>
<li><strong>Scale-up:</strong> Gradual expansion across projects</li>
<li><strong>Continuous Improvement:</strong> Regular evaluation dan updates</li>
</ol>

<h3>ROI Considerations</h3>
<ul>
<li>Initial investment vs long-term benefits</li>
<li>Productivity improvement measurements</li>
<li>Quality enhancement metrics</li>
<li>Safety incident reduction</li>
<li>Client satisfaction improvements</li>
</ul>

<h2>Future Trends</h2>

<div class="alert alert-warning">
<h5>Emerging Technologies</h5>
<ul class="mb-0">
<li>Quantum computing for complex calculations</li>
<li>Blockchain for supply chain transparency</li>
<li>5G connectivity for real-time applications</li>
<li>Sustainable construction technologies</li>
</ul>
</div>

<h2>Kesimpulan</h2>

<p>Adopsi teknologi dalam konstruksi bukan lagi pilihan, tetapi keharusan untuk tetap kompetitif. Perusahaan yang berhasil mengintegrasikan teknologi dengan baik akan memiliki keunggulan dalam efisiensi, kualitas, dan keselamatan proyek.</p>',
                'author' => 'Ahmad Wijaya',
                'date' => '2024-02-28',
                'category' => 'Technology',
                'image' => 'blog-4.jpg'
            ]
        ];

        $article = $articles[$slug] ?? null;

        if (!$article) {
            abort(404);
        }

        return view('pages.artikel-detail', compact('article'));
    }
}
