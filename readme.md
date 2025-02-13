# 🎓 Sistem Penjadwalan Kelas Mata Kuliah

![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3-red)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange)
![Excel](https://img.shields.io/badge/Export-Excel-green)

Sistem ini digunakan untuk melakukan **penjadwalan kelas mata kuliah** secara otomatis menggunakan **algoritma Round Robin**. Dibangun dengan **CodeIgniter 3** dan **MySQL**, serta dilengkapi fitur **impor ke Excel**.

---

## 🚀 Fitur Utama
✅ **Penjadwalan Otomatis** menggunakan algoritma **Round Robin** 🌀  
✅ **Manajemen Mata Kuliah, Dosen, dan Ruangan** 📚  
✅ **Ekspor ke Excel** untuk dokumentasi 📝  
✅ **Login Admin** untuk pengelolaan data 🔑  
✅ **UI Sederhana dan Mudah Digunakan** 🎨  

---

## 🛠️ Teknologi yang Digunakan
- **Framework:** CodeIgniter 3
- **Database:** MySQL
- **Bahasa Pemrograman:** PHP, JavaScript, HTML, CSS
- **Library:** PHPSpreadsheet (untuk ekspor ke Excel)

---

## 📥 Instalasi
1. **Clone Repository**
   ```sh
   git clone https://github.com/jonathanzefanya/schedule-campus.git
   cd schedule-campus
   ```

2. **Konfigurasi Database**
   - Buat database MySQL baru (misalnya: `penjadwalan_db`).
   - Import file `jadwal-kuliah.sql` ke MySQL yang ada di `database/jadwal-kuliah.sql`.
   - Edit file `application/config/database.php` dan sesuaikan dengan koneksi database Anda.

3. **Konfigurasi Base URL**
   - Edit file `application/config/config.php` dan ubah base URL:

     ```php
     $config['base_url'] = 'http://localhost/8000';
     ```

4. **Ketik terimal/cmd**
    ```sh
     php -S localhost:8000
   ```
5. **Jalankan di Browser**
   - Buka `http://localhost/8000`

---

## 🔑 Login Admin
Gunakan dummy data berikut untuk login sebagai admin:
- **Email:** `admin@gmail.com`
- **Password:** `admin`

---

## 📤 Ekspor ke Excel
- Setelah penjadwalan selesai, klik tombol **"Export to Excel"** untuk mengunduh hasil dalam format `.xlsx`.

---

## 📌 Algoritma Round Robin
Algoritma ini akan menugaskan kelas ke slot waktu dan ruangan secara bergantian untuk memastikan **pembagian jadwal yang adil dan merata**.

**Langkah kerja algoritma:**
1. Mengurutkan mata kuliah yang akan dijadwalkan.
2. Menempatkan kelas ke slot waktu dan ruangan yang tersedia.
3. Mengulangi proses hingga semua kelas mendapatkan jadwal.

---

## 📧 Kontak & Kontribusi
Jika ada saran atau ingin berkontribusi, silakan buat **Pull Request** 

---

💡 *Semoga bermanfaat! Happy Coding!* 🚀