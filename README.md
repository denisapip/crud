# freshflower-crud

## FRESH FLOWER DATA APP by Denisa

Aplikasi CRUD sederhana yang dibuat khusus untuk mengelola data bunga segar dengan sentuhan estetik.  
Dirancang untuk kemudahan input, pengelolaan data, dan cocok sebagai pondasi awal membangun aplikasi sistem informasi toko bunga atau florist digital.  
Kamu bebas eksplorasi dan kembangkan sesuai kreativitasmu!

---

## 📁 Isi Folder Aplikasi:

- `ceklogin.php` – proses autentikasi user  
- `dashboard.php` – tampilan utama setelah login  
- `input.php` – form tambah data bunga  
- `edit.php` – halaman edit data  
- `hapus.php` – proses hapus data  
- `koneksi.php` – koneksi ke database  
- `logout.php` – logout session  
- `data.sql` – struktur dan data database awal  
- (opsional) folder `images/` jika menambahkan fitur upload foto

---

## ⚙️ Cara Kerja Aplikasi:

- Pengguna harus login untuk masuk ke dashboard
- Setelah login berhasil, pengguna dapat menambahkan, mengedit, atau menghapus data bunga
- Data yang dicatat meliputi: nama bunga, jenis bunga, bentuk, harga, dan stok
- Tersedia fitur filter dan inputan terarah (radio & select box) agar lebih praktis
- Sistem hanya bisa diakses oleh user login, menjaga keamanan data
- Saat user mencoba login dengan data yang salah, akan muncul pesan error
- Aplikasi juga menggunakan cookies agar user tidak perlu login ulang dalam waktu dekat
- Validasi form sudah aktif: data tidak bisa dikirim jika ada yang kosong atau tidak sesuai format

---

## 📌 Kenapa Kolom Stok Tidak Bisa Diedit?

Kolom stok dibuat **tidak bisa diubah** melalui form edit karena mengikuti sistem perhitungan aktual.  
Perubahan jumlah stok sebaiknya dilakukan dari proses transaksi atau pengelolaan gudang, bukan langsung diedit manual.  
Ini mencegah terjadinya kesalahan pencatatan dan menjaga integritas data barang yang masuk dan keluar.  
Stok hanya bisa ditambah/kurangi lewat alur yang semestinya agar sistem tetap konsisten.

---

## 🌸 Fitur-Fitur Unggulan (Detail):

### 1. Login & Logout User
- Autentikasi login dengan username dan password.
- Sistem logout membersihkan sesi login secara aman.

### 2. Proteksi Session
- Dashboard tidak bisa diakses tanpa login.
- Redirect otomatis jika user mencoba masuk tanpa autentikasi.

### 3. Notifikasi Login Gagal
- Menampilkan pesan yang jelas jika login gagal.
- Memberi tahu user untuk mengecek kembali input mereka.

### 4. CRUD Data Bunga
- **Create**: Tambahkan bunga baru.
- **Read**: Tampilkan semua data bunga.
- **Update**: Edit data bunga yang sudah ada (selain stok).
- **Delete**: Hapus bunga dari sistem.

### 5. Input Terarah
- Select box & radio button untuk jenis dan bentuk bunga.
- Mengurangi kesalahan input dan mempercepat proses entry data.

### 6. Validasi Kelengkapan dan Format Data
- Semua form harus diisi lengkap.
- Input seperti harga wajib dalam format angka.

### 7. Error Handling
- Menangani error input dan sistem dengan pesan yang ramah.
- Validasi input aktif untuk mencegah data kosong atau salah.

### 8. Fitur Cookies
- Menyimpan sesi login dalam waktu tertentu agar user tidak perlu login terus-menerus.

### 9. Stok Read-Only
- Kolom stok hanya bisa dilihat, tidak bisa diedit langsung.
- Menjaga akurasi dan mencerminkan stok riil berdasarkan alur yang benar.

### 10. Struktur Database Sederhana
- File SQL tersedia dan siap digunakan.
- Mudah dipahami dan dikembangkan lebih lanjut.

### 11. Desain UI Estetik & Ramah Pengguna
- Warna lembut dan layout sederhana tapi nyaman.
- Dirancang dengan sentuhan khas Denisa: hangat & personal.

### 12. Struktur Kode Terorganisir
- File dipisah sesuai fungsi masing-masing.
- Cocok sebagai proyek awal untuk belajar dan dikembangkan jadi lebih besar.

---

## 🔐 Akun Demo:

- **admin** : `123`  
- **user1** : `123`  
- **user2** : `123`

---

## 🌷 Penutup

Terima kasih sudah mampir di aplikasi ini.  
Semoga bermanfaat dan bisa jadi awal dari karya besar kamu sendiri!  
Ingat: setiap baris kode yang kamu tulis hari ini, bisa jadi pintu masa depanmu esok.

> **– bloom with code & passion –**  
> *⋆˚✿˖° by Denisa*

---
