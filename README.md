About Project
ini adalah project untuk membuat portofolio otomatis dengan web.

Clone or download this project 
open your terminal and go to your directory project :
1. composer install
2. cp .env.example .env and than setting your database
3. php artisan key:generate
<br>
jika belum melakukan migrate coba migarate terlebih dahulu.
<br>
4. run npm install ; npm run dev;
5. run php artisan serve in your second terminal
6. run project in http://127.0.0.1:8000

1. ## Instalasi Komposer
   - Buka terminal Anda dan navigasikan ke direktori proyek Anda.
   - Jalankan perintah untuk menginstal komposer.

2. ## Konfigurasi Lingkungan
   - Salin berkas  <b> .env.example ke .env </b> dengan perintah <b> cp .env.example .env.</b>
   - Atur konfigurasi basis data di dalam berkas .env sesuai dengan kebutuhan Anda.

3. ## Pembuatan Kunci Aplikasi
   - Jalankan perintah <b> php artisan key:generate </b> untuk menghasilkan kunci aplikasi.

4. ## Migrasi Basis Data
   - Jika Anda belum melakukan migrasi, jalankan perintah php artisan migrate untuk memigrasikan basis data.

5. ## Instalasi dan Kompilasi Paket JavaScript
   - Jalankan perintah npm install untuk menginstal dependensi.
   - Setelah itu, jalankan <b> npm run dev </b> untuk mengkompilasi berkas JavaScript.

6. ## Menjalankan Server Lokal
   - Di terminal kedua, jalankan perintah php artisan serve.
   - Buka proyek Anda di browser pada alamat [http://127.0.0.1:8000](http://127.0.0.1:8000).

Dengan mengikuti langkah-langkah tersebut, proyek Anda akan siap dijalankan pada server lokal.
