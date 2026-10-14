# Tugas Mandiri Praktikum 4

## Konsep Interaksi Database dengan Framework



### 1. Perbandingan Raw SQL, Query Builder, dan Eloquent



**Raw SQL**



```php

DB::select("SELECT * FROM mahasiswas WHERE prodi = ?", ['Teknik Informatika']);

```



**Query Builder**



```php

DB::table('mahasiswas')->where('prodi', 'Teknik Informatika')->get();

```



**Eloquent**



```php

\App\Models\Mahasiswa::where('prodi', 'Teknik Informatika')->get();

```



Ketiga pendekatan tersebut berhasil menampilkan data mahasiswa dari program studi Teknik Informatika.



### 2. Pencatatan Query Eloquent



```php

DB::flushQueryLog();

DB::enableQueryLog();



\App\Models\Mahasiswa::where('prodi', 'Teknik Informatika')

    ->orderBy('nama')

    ->get();



DB::getQueryLog();

```



Query yang tercatat:



```sql

select * from `mahasiswas`

where `prodi` = ?

order by `nama` asc

```



Bindings: `Teknik Informatika`



Waktu eksekusi yang tercatat: `3.7 ms`.



### 3. Keamanan Query Builder dan Eloquent



Query Builder dan Eloquent lebih aman digunakan karena kita tidak perlu menggabungkan input langsung ke dalam perintah SQL. Keduanya bisa memisahkan input dengan perintah SQL sehingga dapat mengurangi risiko SQL Injection. Selain itu, cara penulisan query-nya juga lebih mudah dipahami, terutama bagi pemula. SQL biasa juga bisa aman jika penulisannya benar dan menggunakan parameter binding.


