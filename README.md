# Air Monitoring System

Proyek ini adalah sistem pemantauan kualitas udara yang dibangun menggunakan Laravel 11 dan terintegrasi dengan Python menggunakan Flask, Scikit-Learn, dan berbagai library lainnya. Proyek ini menggunakan database MySQL untuk menyimpan data yang dikumpulkan.

## Daftar Isi

-   [Persyaratan](#persyaratan)
-   [Instalasi](#instalasi)
-   [Konfigurasi](#konfigurasi)
-   [Menjalankan Proyek](#menjalankan-proyek)
-   [Struktur Proyek](#struktur-proyek)
-   [Integrasi Python](#integrasi-python)
-   [Kontribusi](#kontribusi)
-   [Lisensi](#lisensi)

## Persyaratan

Sebelum memulai, pastikan perangkat Anda memiliki:

-   **PHP >= 8.2**
-   **Composer**
-   **MySQL**
-   **Python 3.x**
-   **Pip** (Python package installer)
-   **Laravel 11**
-   **Virtualenv** (opsional, untuk mengelola lingkungan Python)
-   **Node.js dan npm** (untuk frontend jika diperlukan)

## Instalasi

### 1. Klon Repository

```bash
git clone https://github.com/riseall/air_monitoring.git
cd air_monitoring
```

### 2. Instal Dependensi Laravel

```bash
composer install
```

### 3. Instal Dependensi Node.js

```bash
npm install
```

### 4. Instal Dependensi Python

```bash
python3 -m venv venv
source venv/bin/activate
```

Instal dependensi Python yang dibutuhkan:

```bash
pip install flask joblib mysql-connector-python scikit-learn
```

## Konfigurasi

### 1. Konfigurasi Environment Laravel

Salin file .env.example menjadi .env:

```bash
cp .env.example .env
```

Edit file .env sesuai dengan konfigurasi database MySQL Anda:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=nama_pengguna
DB_PASSWORD=password
```

### 2. Konfigurasi Environment Python

Pastikan file konfigurasi Flask (config.py atau lainnya) sudah dikonfigurasi dengan benar, terutama untuk koneksi ke MySQL.

## Menjalankan Proyek

### 1. Menjalankan Laravel

```bash
php artisan key:generate
php artisan serve
```

Laravel akan berjalan di http://localhost:8000.

## Migrasi Database

Untuk menjalankan migrasi database, gunakan perintah berikut:

```bash
php artisan migrate --seed
```

Ini akan membuat tabel yang diperlukan dalam database MySQL Anda.

### 2. Menjalankan Flask

```bash
python app.py
```

## Struktur Proyek

-   **Laravel**: Aplikasi utama berbasis web dengan Laravel 11.
-   **Python Backend**: Direktori yang berisi script Python untuk pemrosesan data, integrasi model Scikit-Learn, dan API Flask.

## Integrasi Python

Laravel berkomunikasi dengan Flask melalui API untuk menjalankan model prediktif yang dikembangkan menggunakan Scikit-Learn. Data dikirim dari Laravel ke Flask, diproses, dan hasilnya dikembalikan ke Laravel untuk ditampilkan kepada pengguna.

### Contoh Request dari Laravel ke Flask

```php
$client = new \GuzzleHttp\Client();
$response = $client->post('http://localhost:5000/api/predict', [
    'json' => [
        'param1' => $value1,
        'param2' => $value2,
    ]
]);

$result = json_decode($response->getBody(), true);
```

### Menggunakan Model yang Disimpan

Model Scikit-Learn disimpan menggunakan joblib dan dimuat dalam aplikasi Flask saat dipanggil oleh Laravel:

```python
from joblib import load
model = load('model.joblib')

def predict(data):
    return model.predict([data])
```
## Dokumentasi Website
### 1. Register
![register](https://github.com/user-attachments/assets/464b5470-64b8-43b0-a0a3-cdce7838577c)

### 2. Login
![login](https://github.com/user-attachments/assets/e09df8e3-565d-4229-be83-39c49850414b)

### 3. Halaman Home
![home client](https://github.com/user-attachments/assets/cf87648a-5d9d-4eaa-99bd-779cf133e729)
![home client1](https://github.com/user-attachments/assets/927504fe-3be5-4782-b57e-2c58f03190ec)
![home client2](https://github.com/user-attachments/assets/5b6998b5-5192-4b3f-9bbe-72f69fc1ed3c)

### 4. Dashboard Admin
![dash1](https://github.com/user-attachments/assets/ce5d8352-c556-4eb0-9a8f-4c912e8cacca)
![dash usr](https://github.com/user-attachments/assets/277d8950-a881-4380-9923-19a9d4e8f0ff)
![dash data](https://github.com/user-attachments/assets/b9877023-d697-40a4-9014-b29646830805)

## Kontribusi

Kontribusi sangat diterima! Jika Anda ingin berkontribusi, silakan fork repository ini, buat branch baru, dan kirim pull request.

## Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file LICENSE untuk informasi lebih lanjut.
