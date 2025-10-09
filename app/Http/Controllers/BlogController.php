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
                'content' => 'Land clearing merupakan langkah awal yang penting dalam setiap proyek konstruksi. Proses ini memerlukan perencanaan yang matang dan teknik yang tepat untuk memastikan hasil yang optimal sambil meminimalkan dampak terhadap lingkungan.

## Perencanaan yang Matang

Sebelum memulai pekerjaan land clearing, perencanaan yang detail sangat diperlukan. Ini meliputi:

- **Survey lokasi** untuk memahami kondisi tanah dan vegetasi
- **Identifikasi pohon dan vegetasi** yang perlu dipertahankan
- **Perencanaan jalur akses** untuk alat berat
- **Perhitungan volume material** yang akan dihasilkan

## Teknik Pembersihan yang Efektif

### 1. Pembersihan Bertahap
Lakukan pembersihan secara bertahap, mulai dari vegetasi kecil hingga pohon besar. Hal ini memudahkan akses alat berat dan mengurangi risiko kerusakan.

### 2. Penggunaan Alat yang Tepat
- **Excavator** untuk penebangan pohon besar
- **Bulldozer** untuk mendorong material
- **Mulcher** untuk menghancurkan material organik

### 3. Penanganan Material Organik
Material organik hasil land clearing dapat diolah menjadi:
- Kompos untuk pupuk organik
- Biomassa untuk energi alternatif
- Material landfill yang ramah lingkungan

## Aspek Lingkungan

### Pelestarian Ekosistem
- Identifikasi dan lindungi habitat satwa langka
- Pertahankan zona penyangga di sekitar sumber air
- Replanting di area yang memungkinkan

### Pengelolaan Erosi
- Buat drainage system sementara
- Gunakan erosion control measures
- Monitor kualitas air di sekitar lokasi

## Kesimpulan

Land clearing yang efektif memerlukan keseimbangan antara efisiensi kerja dan tanggung jawab lingkungan. Dengan perencanaan yang matang dan teknik yang tepat, kita dapat mencapai hasil yang optimal sambil menjaga kelestarian lingkungan.',
                'author' => 'Tim Ahli Nusajaya',
                'date' => '2024-03-15',
                'category' => 'Tips & Tricks',
                'image' => 'blog-1.jpg'
            ],
            'memilih-excavator-yang-tepat' => [
                'slug' => 'memilih-excavator-yang-tepat',
                'title' => 'Panduan Memilih Excavator yang Tepat untuk Proyek Anda',
                'content' => 'Excavator merupakan alat berat yang sangat penting dalam industri konstruksi dan pertambangan. Pemilihan jenis excavator yang tepat akan sangat mempengaruhi efisiensi dan hasil kerja proyek Anda.

## Jenis-Jenis Excavator

### 1. Mini Excavator (1-6 ton)
**Keunggulan:**
- Mobilitas tinggi di area terbatas
- Konsumsi bahan bakar efisien
- Cocok untuk proyek residensial

**Aplikasi:**
- Landscaping
- Utility work
- Pekerjaan di area sempit

### 2. Medium Excavator (6-45 ton)
**Keunggulan:**
- Versatilitas tinggi
- Balance antara power dan mobilitas
- Tersedia berbagai attachment

**Aplikasi:**
- Road construction
- Building construction
- Drainage work

### 3. Large Excavator (45+ ton)
**Keunggulan:**
- Power besar untuk material heavy-duty
- Productivity tinggi
- Cocok untuk proyek skala besar

**Aplikasi:**
- Mining operation
- Large infrastructure
- Mass excavation

## Faktor Pemilihan

### 1. Skala Proyek
- **Proyek kecil**: Mini excavator
- **Proyek menengah**: Medium excavator
- **Proyek besar**: Large excavator

### 2. Kondisi Lokasi
- **Area terbatas**: Pilih unit compact
- **Ground condition**: Pertimbangkan track atau wheel
- **Akses jalan**: Sesuaikan dengan transportasi

### 3. Jenis Pekerjaan
- **Digging**: Prioritaskan digging force
- **Loading**: Fokus pada cycle time
- **Demolition**: Pertimbangkan specialized attachment

### 4. Budget dan Durasi
- **Proyek jangka pendek**: Rental lebih ekonomis
- **Proyek jangka panjang**: Pertimbangkan pembelian
- **Budget terbatas**: Pilih unit bekas berkualitas

## Tips Operasional

### Maintenance Rutin
- Daily inspection sebelum operasi
- Scheduled maintenance sesuai manual
- Monitor fluid levels dan wear parts

### Operator Training
- Pastikan operator bersertifikat
- Regular training untuk safety procedure
- Familiarisasi dengan unit spesifik

### Fuel Efficiency
- Gunakan eco mode saat memungkinkan
- Avoid unnecessary idling
- Regular maintenance untuk optimal performance

## Kesimpulan

Pemilihan excavator yang tepat memerlukan pertimbangan berbagai faktor. Konsultasikan dengan ahli untuk mendapatkan rekomendasi yang sesuai dengan kebutuhan spesifik proyek Anda.',
                'author' => 'Budi Santoso',
                'date' => '2024-03-10',
                'category' => 'Equipment',
                'image' => 'blog-2.jpg'
            ],
            'standar-keselamatan-konstruksi' => [
                'slug' => 'standar-keselamatan-konstruksi',
                'title' => 'Standar Keselamatan dalam Pekerjaan Konstruksi',
                'content' => 'Keselamatan kerja di lokasi konstruksi bukan hanya tanggung jawab perusahaan, tetapi juga setiap individu yang terlibat dalam proyek. Penerapan standar keselamatan yang ketat dapat mencegah kecelakaan kerja dan memastikan kelancaran proyek.

## Dasar-Dasar K3 Konstruksi

### Prinsip Hierarki Kontrol Bahaya
1. **Eliminasi**: Menghilangkan bahaya dari sumbernya
2. **Substitusi**: Mengganti dengan alternatif yang lebih aman
3. **Engineering Control**: Kontrol teknis untuk isolasi bahaya
4. **Administrative Control**: Prosedur dan training
5. **PPE**: Personal Protective Equipment sebagai lini terakhir

## Personal Protective Equipment (PPE)

### PPE Wajib di Konstruksi
- **Safety Helmet**: Melindungi kepala dari benturan
- **Safety Shoes**: Perlindungan kaki dari tusukan dan benturan
- **High-Vis Vest**: Meningkatkan visibility
- **Safety Glasses**: Perlindungan mata dari debu dan debris
- **Work Gloves**: Perlindungan tangan sesuai jenis pekerjaan

### PPE Khusus
- **Fall Protection**: Harness dan lanyard untuk work at height
- **Respiratory Protection**: Masker untuk area berdebu
- **Hearing Protection**: Ear plug di area bising

## Hazard Identification

### Bahaya Umum di Konstruksi
1. **Struck-by Hazards**
   - Falling objects
   - Moving equipment
   - Flying particles

2. **Caught-in/between Hazards**
   - Trench collapse
   - Equipment entanglement
   - Structural collapse

3. **Fall Hazards**
   - Unprotected edges
   - Ladder accidents
   - Scaffold failures

4. **Electrical Hazards**
   - Power lines
   - Faulty equipment
   - Wet conditions

## Safety Procedures

### Pre-Work Safety Briefing
- Review hari ini dan identifikasi bahaya
- Diskusi method statement
- Emergency response plan
- Weather conditions assessment

### Equipment Safety
- Daily inspection checklist
- Proper maintenance schedule
- Operator certification requirements
- Safe operating procedures

### Site Safety Management
- Safety signage dan barrier
- Traffic management plan
- Emergency evacuation routes
- First aid facilities

## Emergency Response

### Emergency Action Plan
- Emergency contact numbers
- Evacuation procedures
- Assembly points
- Communication methods

### Incident Reporting
- Immediate response procedures
- Investigation methodology
- Corrective action implementation
- Lesson learned documentation

## Safety Culture

### Management Commitment
- Safety policy implementation
- Resource allocation for safety
- Regular safety audits
- Recognition programs

### Worker Participation
- Safety suggestion system
- Hazard reporting encouragement
- Safety training participation
- Peer safety monitoring

## Kesimpulan

Keselamatan konstruksi memerlukan komitmen dari semua level organisasi. Dengan implementasi standar keselamatan yang konsisten dan budaya safety yang kuat, kita dapat menciptakan lingkungan kerja yang aman dan produktif.',
                'author' => 'Sari Indah',
                'date' => '2024-03-05',
                'category' => 'Safety',
                'image' => 'blog-3.jpg'
            ],
            'teknologi-terbaru-konstruksi' => [
                'slug' => 'teknologi-terbaru-konstruksi',
                'title' => 'Teknologi Terbaru dalam Industri Konstruksi',
                'content' => 'Industri konstruksi terus berkembang dengan adopsi teknologi baru yang membantu meningkatkan efisiensi, akurasi, dan keselamatan kerja. Dari penggunaan drone untuk survei hingga IoT untuk monitoring, mari kita eksplorasi teknologi yang mengubah cara kerja kita.

## Drone Technology

### Aplikasi Drone dalam Konstruksi
- **Site Survey**: Mapping dan topografi akurat
- **Progress Monitoring**: Dokumentasi kemajuan proyek
- **Safety Inspection**: Inspeksi area berbahaya
- **Volume Calculation**: Perhitungan material stockpile

### Keunggulan Drone
- Efisiensi waktu survei meningkat 90%
- Akurasi data hingga centimeter level
- Dokumentasi visual yang komprehensif
- Mengurangi risiko keselamatan pekerja

## Building Information Modeling (BIM)

### Manfaat BIM
- **Visualization**: 3D modeling untuk better understanding
- **Collaboration**: Platform terpusat untuk semua stakeholder
- **Clash Detection**: Identifikasi konflik sebelum konstruksi
- **Quantity Take-off**: Perhitungan material otomatis

### BIM 4D dan 5D
- **4D BIM**: Integrasi dengan scheduling
- **5D BIM**: Integrasi dengan cost management
- **Real-time Updates**: Sinkronisasi dengan progress aktual

## Internet of Things (IoT)

### Smart Construction Site
- **Equipment Monitoring**: Real-time status alat berat
- **Environmental Sensors**: Monitoring cuaca dan kualitas udara
- **Worker Safety**: Wearable device untuk safety monitoring
- **Material Tracking**: RFID untuk inventory management

### Predictive Maintenance
- Sensor monitoring untuk early warning
- Maintenance scheduling berbasis data
- Reduced downtime dan repair cost
- Extended equipment lifespan

## Artificial Intelligence & Machine Learning

### AI Applications
- **Predictive Analytics**: Forecasting project risks
- **Quality Control**: Automated defect detection
- **Safety Monitoring**: Computer vision for safety compliance
- **Resource Optimization**: AI-driven scheduling

### Machine Learning Benefits
- Pattern recognition dari historical data
- Continuous improvement through learning
- Automated decision making
- Risk mitigation strategies

## Mobile Technology

### Construction Apps
- **Project Management**: Real-time collaboration tools
- **Quality Assurance**: Digital checklists dan forms
- **Time Tracking**: Automated timesheet
- **Communication**: Instant messaging dan video calls

### Cloud Integration
- Real-time data synchronization
- Remote access capabilities
- Centralized document management
- Backup dan disaster recovery

## Augmented Reality (AR) & Virtual Reality (VR)

### AR Applications
- **On-site Visualization**: Overlay digital models pada real world
- **Training**: Interactive learning experience
- **Maintenance**: Step-by-step guidance
- **Quality Control**: Compare as-built vs design

### VR Applications
- **Design Review**: Immersive model walkthrough
- **Safety Training**: Virtual hazard scenarios
- **Client Presentation**: Realistic project visualization
- **Remote Collaboration**: Virtual meetings

## Advanced Materials & Equipment

### Smart Materials
- Self-healing concrete
- Phase-change materials untuk energy efficiency
- Smart glass dengan variable transparency
- Lightweight composite materials

### Autonomous Equipment
- Self-driving dump trucks
- Automated excavators
- Robotic bricklaying
- 3D printing construction

## Implementation Strategy

### Adoption Roadmap
1. **Assessment**: Evaluate current technology landscape
2. **Pilot Projects**: Start dengan small-scale implementation
3. **Training**: Staff development untuk new technologies
4. **Scale-up**: Gradual expansion across projects
5. **Continuous Improvement**: Regular evaluation dan updates

### ROI Considerations
- Initial investment vs long-term benefits
- Productivity improvement measurements
- Quality enhancement metrics
- Safety incident reduction
- Client satisfaction improvements

## Future Trends

### Emerging Technologies
- Quantum computing for complex calculations
- Blockchain for supply chain transparency
- 5G connectivity for real-time applications
- Sustainable construction technologies

## Kesimpulan

Adopsi teknologi dalam konstruksi bukan lagi pilihan, tetapi keharusan untuk tetap kompetitif. Perusahaan yang berhasil mengintegrasikan teknologi dengan baik akan memiliki keunggulan dalam efisiensi, kualitas, dan keselamatan proyek.',
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
