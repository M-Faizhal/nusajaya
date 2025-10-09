# PANDUAN PENAMBAHAN LOGO NUSAJAYA

## Logo yang Anda berikan memiliki spesifikasi:
- Background: Biru navy (#1e3a8a - sesuai dengan tema website)
- Konten:
  * Grafis gedung dengan garis kurva dinamis (light blue)
  * Teks "NJU" (merah/coral)
  * Teks "Nusa Jaya Unggul" (light blue)
  * Tagline: "Penyiapan Lahan | Konstruksi | Sewa Alat Konstruksi"

## Langkah-langkah Menambahkan Logo:

### 1. Simpan File Logo
Simpan file logo dari attachment dengan nama: **logo-nusajaya.png**
Lokasi: `d:\Project\nusajaya\public\images\logo-nusajaya.png`

### 2. Dimana Logo Akan Muncul
Logo akan otomatis tampil di:

✓ **Navbar (Header)** - Kiri atas, tinggi 50px
  - Menggantikan teks "Nusajaya" dengan icon
  - Efek hover: sedikit zoom (scale 1.05)
  - Responsive: tetap terlihat di mobile

✓ **Footer** - Bagian kiri, tinggi 80px  
  - Menggantikan heading "Nusajaya" dengan icon
  - Di atas deskripsi perusahaan

✓ **Favicon** - Tab browser
  - Icon kecil di tab browser
  - Membantu branding dan identifikasi tab

### 3. Format Logo yang Disarankan

#### Untuk Navbar & Footer:
- Format: PNG dengan background transparan (atau bisa dengan background biru seperti aslinya)
- Ukuran minimal: 500 x 500 px
- Rasio: Lebih baik horizontal/landscape (seperti logo yang Anda berikan)
- Navbar akan resize otomatis ke tinggi 50px
- Footer akan resize ke tinggi 80px

#### Untuk Favicon:
- Format: PNG
- Ukuran ideal: 512x512 px atau 256x256 px
- Bisa menggunakan logo yang sama, browser akan resize otomatis

### 4. Alternatif Format Logo

Jika ingin menggunakan format berbeda:

**SVG (Recommended untuk kualitas terbaik)**:
- Simpan sebagai: logo-nusajaya.svg
- Update di file: resources/views/layouts/app.blade.php
- Ganti: `logo-nusajaya.png` menjadi `logo-nusajaya.svg`
- Keuntungan: scalable, ukuran file kecil, tetap tajam di semua ukuran

**ICO untuk Favicon**:
- Buat file: logo-nusajaya.ico (16x16, 32x32, 48x48 px)
- Update favicon link di head:
  ```html
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-nusajaya.ico') }}">
  ```

### 5. Verifikasi

Setelah menambahkan logo, buka website dan cek:
- [ ] Logo muncul di navbar (kiri atas)
- [ ] Logo muncul di footer (bagian atas kolom pertama)
- [ ] Favicon muncul di tab browser
- [ ] Logo responsive di mobile view
- [ ] Logo tidak pecah/blur

### 6. Troubleshooting

**Logo tidak muncul?**
- Pastikan nama file PERSIS: `logo-nusajaya.png`
- Cek lokasi file di: `d:\Project\nusajaya\public\images\`
- Clear browser cache (Ctrl + F5)
- Cek console browser untuk error

**Logo terlalu besar/kecil?**
Edit tinggi logo di file: `resources/views/layouts/app.blade.php`
- Navbar: ubah `height: 50px` di CSS `.navbar-brand img`
- Footer: ubah `height: 80px` di inline style

**Logo blur/pecah?**
- Gunakan file PNG dengan resolusi minimal 500x500px
- Atau gunakan format SVG untuk hasil terbaik

### 7. Kustomisasi Tambahan

Jika ingin menambahkan teks di samping logo di navbar:
```html
<a class="navbar-brand" href="{{ route('home') }}">
    <img src="{{ asset('images/logo-nusajaya.png') }}" alt="Nusajaya Logo">
    <span>Nusajaya</span>
</a>
```

Tambahkan CSS untuk teks:
```css
.navbar-brand span {
    font-size: 1.5rem;
    font-weight: 700;
    margin-left: 0.5rem;
}
```

---

## File yang Sudah Dimodifikasi:

1. **resources/views/layouts/app.blade.php**
   - Favicon link ditambahkan di `<head>`
   - Navbar brand menggunakan logo
   - Footer menggunakan logo
   - CSS untuk styling logo

2. **public/images/** (folder dibuat)
   - Lokasi penyimpanan logo

---

**Catatan**: Logo dari gambar yang Anda berikan sudah sangat profesional dan sesuai dengan tema biru website. Format dan desainnya sudah bagus untuk langsung digunakan!
