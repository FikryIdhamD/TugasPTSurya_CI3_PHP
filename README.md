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

    Setelah di-clone, pindahkan folder proyek ini ke direktori `C:\xampp\htdocs\`. Pastikan untuk mengganti `Nama File` dengan nama folder yang sesuai dengan nama file repository yang telah Anda clone.

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
    - Menampilkan daftar List seluruh proyek yang ada di database.

2. **Tambah Proyek**:
    - Klik tombol **Tambah Proyek** untuk menambahkan proyek baru.
    - Menampilkan Form.
    - Form ini akan otomatis menyesuaikan pilihan lokasi berdasarkan data lokasi yang ada di database REST API.

3. **Edit Proyek**:
    - Klik tombol **Edit** pada proyek yang ingin diubah.
    - Menampilkan Form.
    - Form edit juga akan menyesuaikan pilihan lokasi berdasarkan data dari database REST API.

4. **Hapus Proyek**:
    - Klik tombol **Delete** pada proyek yang ingin dihapus.

## Bukti dan Dokumentasi

- **Screenshot Website**:
- Halaman Awal (Menampilkan List dari Proyek):
  
  ![image](https://github.com/user-attachments/assets/934ad0cb-f1fb-45f0-b0bb-1f09f42733c0)
  
- Form Tambah Proyek (Menampilkan Form untuk membuat Proyek dengan Lokasi sudah mengacu pada Database):
  - Menambahkan Proyek:

    ![image](https://github.com/user-attachments/assets/ed77f787-58b3-48b4-896a-eed9a1fd8000)
    
  - Hasil :

    ![image](https://github.com/user-attachments/assets/d02132c1-11be-43e4-aba2-9d9007651314)

- Form Edit Proyek (Menampilkan Form untuk Mengubah Proyek dengan Lokasi sudah mengacu pada Database):
  - Mengubah Proyek :

    ![image](https://github.com/user-attachments/assets/83db4125-d9af-4ec2-a872-780eeec4a06f)

  - Hasil :

    ![image](https://github.com/user-attachments/assets/2b23902d-08a8-4d21-ba3e-38795fabaeb6)

- Fungsi Delete :
  - Before :

    ![image](https://github.com/user-attachments/assets/9b23019d-cc9a-47dc-b9d0-874365017ff8)

  - After :

    ![image](https://github.com/user-attachments/assets/c07cf59e-9f06-493e-94ac-dfc19613c157)

- **Video Demo Website**:

	https://github.com/user-attachments/assets/60ed0225-601c-4279-8c4c-9d82f444ddc7



## Lisensi

Proyek ini menggunakan lisensi MIT. Silakan lihat file `LICENSE` untuk informasi lebih lanjut.
