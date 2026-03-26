# Praktikum 1: PHP Framework (CodeIgniter 4)

## Nama: She She Metahanover 
## Nim: 312410432
## Kelas: I241C

---

##  Tujuan Praktikum

1. Memahami konsep dasar Framework
2. Memahami konsep MVC (Model-View-Controller)
3. Mampu membuat program sederhana menggunakan CodeIgniter 4

---

##  Persiapan

Sebelum memulai praktikum, dilakukan beberapa persiapan:

* Menggunakan text editor (VSCode)
* Menggunakan web server XAMPP
* Mengaktifkan ekstensi PHP pada file `php.ini`:

  * extension=intl
  * extension=mysqli
  * extension=pdo_mysql
  * extension=xml
  * extension=json

---

##  Instalasi CodeIgniter 4

Langkah-langkah instalasi:

1. Download CodeIgniter dari website resmi
2. Extract ke folder:

   ```
   xampp_new/htdocs/lab11_ci
   ```
3. Rename folder menjadi:

   ```
   ci4
   ```
4. Jalankan di browser:

   ```
   http://localhost/lab11_ci/ci4/public
   ```

---

##  Menjalankan CLI CodeIgniter

Masuk ke folder project:

```
cd C:\xampp_new\htdocs\lab11_ci\ci4

```

Jalankan perintah:

```
C:\xampp_new\php\php.exe spark routes
```

Hasilnya menampilkan daftar command CodeIgniter.

---

##  Menjalankan Server

```
C:\xampp_new\php\php.exe spark routes
```

Akses di browser:

```
http://localhost:8080/
```

---

##  Mengaktifkan Debugging

Langkah-langkah:

1. Ubah file `env` menjadi `.env`
2. Edit file `.env`
3. Ubah menjadi:

```
CI_ENVIRONMENT = development
```

4. Tambahkan:

```
app.debug = true
```

---

##  Pengujian Debug

Mengubah file:

```
app/Controllers/Home.php
```

Menjadi:

```php
<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo $variabelTidakAda;
    }
}
```

Hasil:
Menampilkan error detail pada browser, menandakan debugging aktif.

---

##  Struktur Direktori

Beberapa folder penting:

* `app/` → tempat coding utama
* `public/` → file yang diakses browser
* `system/` → core CodeIgniter
* `writable/` → penyimpanan file sementara

---

##  Konsep MVC

* **Model** → Mengelola data
* **View** → Tampilan user
* **Controller** → Penghubung antara Model dan View

---

##  Routing

Routing terdapat pada:

```
app/Config/Routes.php
```

Contoh:

```php
$routes->get('/', 'Home::index');
```

---

##  Kesimpulan

Pada praktikum ini, mahasiswa dapat memahami konsep dasar framework CodeIgniter 4, cara instalasi, menjalankan server, serta memahami konsep MVC dan debugging.

---

##  Screenshot

## Instalasi Codeigniter 4
   
<img width="1909" height="926" alt="Cuplikan layar 2026-03-03 153023" src="https://github.com/user-attachments/assets/267c0106-e3c9-426c-a158-22732179c7dd" />

---

## Routes List

![WhatsApp Image 2026-03-03 at 23 41 22](https://github.com/user-attachments/assets/dddee9ca-2730-44de-9c96-c9cdde1ce260)

---

## Tampilan Error 404 Saat Mengakses Route About

![WhatsApp Image 2026-03-03 at 15 43 26](https://github.com/user-attachments/assets/e36a5513-0b85-4d65-a47d-eb0e9b367e79)

---

## Tampilan Error 404 Saat Mengakses Route Contact

![WhatsApp Image 2026-03-03 at 15 44 16](https://github.com/user-attachments/assets/44b4f28a-7a2a-4647-a88c-84377377e8d7)

---

## Tampilan Error 404 Saat Mengakses Route Faqs

![WhatsApp Image 2026-03-03 at 15 44 59](https://github.com/user-attachments/assets/7bc1bbc3-123c-4277-b32c-3ec5c3ebbd71)

---

## Tampilan Halaman About - Berhasil Diakses

![WhatsApp Image 2026-03-03 at 21 55 51](https://github.com/user-attachments/assets/aea130ce-4778-4481-8b63-b984277fb346)

---

## Tampilan Halaman  Terms of Service - Berhasil Diakses

![WhatsApp Image 2026-03-03 at 23 57 54](https://github.com/user-attachments/assets/f6a13622-7ca3-41e9-922a-2085bfebc555)

---

## Tampilan Halaman About - Versi Modifikasi

![WhatsApp Image 2026-03-04 at 00 04 14](https://github.com/user-attachments/assets/22ed19b9-7977-4d8e-8c61-5972228349f6)

---

## Tampilan Halaman About dengan Layout Sederhana

![WhatsApp Image 2026-03-04 at 00 22 53](https://github.com/user-attachments/assets/ec4b1bf0-77bc-4b48-85ff-7cea62fbc89d)

