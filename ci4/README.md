# Praktikum 1: PHP Framework (CodeIgniter 4)

## Nama: She She Metahanover 
## NIM: 312410432
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

1. Instalasi Codeigniter 4


2. Routes List


3. 
