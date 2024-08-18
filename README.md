# Tugas PT Surya - CodeIgniter 3 PHP Project

Proyek ini adalah aplikasi web yang dikembangkan menggunakan **CodeIgniter 3** yang berfungsi untuk mengelola data proyek. Aplikasi ini menampilkan daftar proyek, memungkinkan pengguna untuk menambah, mengedit, dan menghapus proyek dengan lokasi yang sudah disesuaikan berdasarkan data yang diambil dari REST API Java Spring Boot.

## Prasyarat

- **XAMPP**:

  Digunakan untuk menjalankan server lokal (Apache dan MySQL).
- **Java Spring Boot REST API**:

  Proyek sebelumnya yang perlu dijalankan sebelum mengoperasikan aplikasi ini. [(Link Ke Proyek Sebelumnya)](https://github.com/FikryIdhamD/TugasPTSurya_Springboot)

  Pastikan seluruh fungsi REST API dari proyek sebelumnya berjalan dengan baik.

## Langkah-langkah Menjalankan Aplikasi

1. **Jalankan REST API Java Spring Boot**:

    Pastikan Anda telah mengikuti semua langkah di proyek [Java Spring Boot REST API](https://github.com/FikryIdhamD/TugasPTSurya_Springboot) untuk menjalankan REST API. Pastikan semua fungsi berjalan dengan baik.

2. **Clone Repository ini**:

    Clone repository ini ke komputer Anda:

    ```bash
    git clone https://github.com/FikryIdhamD/TugasPTSurya_CI3_PHP.git
    ```

3. **Pindahkan File ke Direktori XAMPP**:

    Setelah di-clone, pindahkan folder proyek ini ke direktori `C:\xampp\htdocs\{Nama File}`. Pastikan untuk mengganti `Nama File` dengan nama folder yang sesuai dengan nama file repository yang telah Anda clone tanpa kurung kurawal {}.

	 Contoh: C:\xampp\htdocs\TugasPTSurya_CI3_PHP

5. **Jalankan Apache di XAMPP**:

    Buka aplikasi **XAMPP** dan nyalakan **Apache**.

6. **Akses Aplikasi di Browser**:

    Buka browser dan masukkan URL berikut untuk mengakses aplikasi:

    ```url
    http://localhost/{Nama File}/index.php/proyekController
    ```

    **Catatan**: Gantilah `{Nama File}` dengan nama folder yang sesuai.

## Fitur Aplikasi

1. **Halaman Utama**:
    - Menampilkan daftar seluruh proyek yang ada di database.

2. **Tambah Proyek**:
    - Klik tombol **Tambah Proyek** untuk menambahkan proyek baru.
    - Form ini akan otomatis menyesuaikan pilihan lokasi berdasarkan data lokasi yang ada di database REST API.

3. **Edit Proyek**:
    - Klik tombol **Edit** pada proyek yang ingin diubah.
    - Form edit juga akan menyesuaikan pilihan lokasi berdasarkan data dari database REST API.

4. **Hapus Proyek**:
    - Klik tombol **Delete** pada proyek yang ingin dihapus.

## Bukti dan Dokumentasi

- **Screenshot Website**: (Tambahkan link atau gambar screenshot di sini)
- **Video Demo Website**:
  

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat **pull request** atau buka **issue** baru di repository ini.

## Lisensi

Proyek ini menggunakan lisensi MIT. Silakan lihat file `LICENSE` untuk informasi lebih lanjut.
