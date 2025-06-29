
# 📚 Sistem Perpustakaan Online Laravel

Sistem Perpustakaan Online ini adalah aplikasi berbasis web yang dibangun menggunakan Laravel. Aplikasi ini memungkinkan pengguna untuk melihat koleksi buku, meminjam buku, dan menerima notifikasi terkait buku baru serta pengingat batas waktu pengembalian.

## 🚀 Fitur Utama

- 🔒 Autentikasi pengguna (login, register)
- 📖 Manajemen buku dan kategori
- 📅 Sistem peminjaman & pengembalian buku
- 📬 **Job Scheduler**:
  - Mengirim email notifikasi setiap hari pukul **07.00 WIB**
  - Memberi tahu pengguna jika:
    - Ada **buku baru**
    - Buku yang dipinjam mendekati **batas waktu 3 hari lagi**
- 📊 Dasbor admin untuk pengelolaan data
- 💡 UI responsif dengan Blade & Bootstrap

## ⚙️ Teknologi yang Digunakan

- Laravel 10
- MySQL
- Blade Templating
- Laravel Scheduler (Cron Job)
- Bootstrap 5
- Mailtrap (untuk pengujian email)

## 🛠️ Instalasi dan Penggunaan

1. **Clone repository**
   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo

2. **Install dependencies**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Konfigurasi environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup database**

   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan server**

   ```bash
   php artisan serve
   ```

6. **Aktifkan scheduler**
   Tambahkan ini ke cron server kamu:

   ```
   * * * * * cd /path-ke-project && php artisan schedule:run >> /dev/null 2>&1
   ```

## 📧 Pengujian Notifikasi Email

* Gunakan [Mailtrap.io](https://mailtrap.io/) untuk menguji pengiriman email saat development.
* Konfigurasikan pada file `.env`:

  ```
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=your_username
  MAIL_PASSWORD=your_password
  MAIL_ENCRYPTION=null
  MAIL_FROM_ADDRESS=admin@perpustakaan.com
  MAIL_FROM_NAME="Perpustakaan Online"
  ```

## 🤝 Kontribusi

Kontribusi terbuka! Silakan fork dan buat pull request untuk penambahan fitur atau perbaikan bug.

## 📄 Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
