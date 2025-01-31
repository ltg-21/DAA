# Hydration Tracker

## 1. Pendahuluan
### 1.1 Latar Belakang
Hidrasi yang cukup sangat penting untuk menjaga kesehatan dan produktivitas. Banyak orang sering kali lupa untuk minum air dalam jumlah yang cukup setiap harinya. Aplikasi **Hydration Tracker** dirancang untuk membantu pengguna memonitor konsumsi air mereka dan memberikan notifikasi pengingat secara otomatis. Dengan **algoritma Greedy**, aplikasi ini dapat langsung menghitung sisa target konsumsi air tanpa perlu memperhitungkan pola minum sebelumnya.
Aplikasi ini akan dibangun menggunakan **Laravel**, yang mendukung pengelolaan data dengan mudah serta memiliki fitur notifikasi yang dapat dikirim melalui berbagai media seperti email, push notification, atau database.

### 1.2 Tujuan
Membangun aplikasi **Hydration Tracker** yang memungkinkan pengguna memonitor konsumsi air mereka dengan cara sederhana. Aplikasi ini akan menggunakan **algoritma Greedy** untuk memperbarui progres konsumsi air tanpa mempertimbangkan data historis.

---

## 2. Ruang Lingkup
### Kebutuhan Utama:
- Pengguna harus bisa mencatat jumlah air yang diminum.
- Aplikasi harus menampilkan target konsumsi air harian dan sisa target yang harus dicapai.
- Pengguna harus mendapatkan pengingat untuk minum air jika belum mencapai target harian.
- Aplikasi harus mengupdate progres secara otomatis dengan **algoritma Greedy**.

### Kebutuhan Teknis:
- Aplikasi harus dibangun menggunakan **Laravel** untuk backend.
- Aplikasi harus mendukung **notifikasi** menggunakan metode seperti **database, email, atau push notification**.
- Aplikasi harus mampu menyimpan data konsumsi air pengguna secara persisten.

---

## 3. Aktor
### Pengguna (User):
- **Input jumlah air yang diminum** (dalam ml).
- **Melihat progres harian** dan histori konsumsi air.
- **Menerima notifikasi pengingat**.

---

## 4. Fitur Utama
- **Pencatatan Air**: Pengguna dapat mencatat konsumsi air mereka secara langsung.
- **Progres Konsumsi**: Tampilan sisa target konsumsi air harian.
- **Notifikasi Pengingat**: Pengingat otomatis melalui notifikasi untuk mengingatkan pengguna mencapai target.
- **Dashboard Pengguna**: Visualisasi grafik yang menunjukkan progres konsumsi air harian dan histori.

---

## 5. Persyaratan Fungsional
- **Input**: Pengguna harus bisa memasukkan jumlah air yang diminum.
- **Output**: Sistem akan menampilkan progres konsumsi air dan sisa target.
- **Proses**: Algoritma Greedy akan menghitung langsung sisa target setelah setiap input.
- **Notifikasi**: Sistem akan mengirimkan pengingat untuk minum air jika pengguna belum memenuhi target harian.

---

## 6. Persyaratan Non-Fungsional
- **Keamanan**: Data pengguna harus disimpan dengan aman, terutama jika menggunakan notifikasi melalui email atau SMS.
- **Kinerja**: Aplikasi harus bisa merespons input pengguna dengan cepat.
- **Skalabilitas**: Aplikasi harus mampu menangani banyak pengguna dalam waktu bersamaan.

---

## 7. Model, Migration, Seeder, dan Resource yang Dibutuhkan pada Container
### Model 
- **User**: Menyimpan informasi terkait pengguna.
- **HydrationLog**: Menyimpan catatan konsumsi air pengguna.

### Migration
#### Tabel `users`
- `id`: ID unik pengguna.
- `name`: Nama lengkap pengguna.
- `email`: Alamat email unik pengguna.
- `password`: Kata sandi terenkripsi untuk keamanan.
- `created_at & updated_at`: Tanggal pembuatan dan pembaruan data pengguna.

#### Tabel `hydration_logs`
- `id`: ID unik untuk setiap catatan konsumsi air.
- `user_id`: Menghubungkan catatan dengan pengguna tertentu.
- `amount`: Jumlah air yang diminum (dalam mililiter).
- `date`: Tanggal konsumsi air.
- `created_at & updated_at`: Tanggal pembuatan dan pembaruan catatan.
**Relasi**: Setiap `User` dapat memiliki banyak `HydrationLog`.

### Seeder
- **Seeder untuk `users`**: Menyediakan data pengguna awal untuk aplikasi.
- **Seeder untuk `hydration_logs`**: Mengisi tabel catatan konsumsi air dengan data awal.

### Resource 
Beberapa resource yang dibutuhkan untuk menjalankan aplikasi ini:
- **Database (MySQL)**: Menyimpan data pengguna dan catatan konsumsi air.
- **Queue (untuk pengingat)**: Digunakan untuk menangani pengingat hidrasi pengguna.
- **Scheduler (untuk pengingat otomatis)**: Scheduler Laravel untuk memantau waktu pengingat.

---

## 8. Use Case
Pengguna adalah aktor yang berinteraksi dengan sistem. Pengguna dapat melakukan beberapa tindakan seperti:
- **Registrasi** untuk membuat akun baru.
- **Login** untuk masuk ke akun yang sudah ada.
- **Tambah Konsumsi Air** untuk mencatat jumlah air yang diminum.
- **Lihat Riwayat Konsumsi Air** untuk melihat daftar konsumsi air sebelumnya.
- **Terima Pengingat Hidrasi** untuk mendapatkan notifikasi untuk minum air.

---

## 9. Flowchart
### Penjelasan Flowchart:
1. Pengguna membuka aplikasi dan memilih untuk **login atau registrasi**.
2. **Login atau Registrasi** akan memeriksa apakah kredensial valid.
3. Jika **login berhasil**, aplikasi menampilkan **dashboard**.
4. Pengguna dapat **menambah konsumsi air**, dan sistem akan mencatatnya.
5. Pengguna dapat **melihat riwayat konsumsi air** yang sebelumnya tercatat.
6. Aplikasi akan **mengirim pengingat hidrasi** jika diperlukan.
7. Jika **login gagal**, sistem menampilkan pesan kesalahan dan meminta pengguna untuk mengulangi login.

---

## 10. Permissions
Karena hanya ada satu aktor (**Pengguna**), permission sederhana bisa digunakan:
- **Pengguna** dapat mengakses, menambah, dan melihat data konsumsi air.

---

## 11. Implementasi Algoritma Greedy
### **Konsep Greedy dalam Hydration Tracker**
Aplikasi menggunakan **algoritma Greedy** untuk menentukan **waktu terbaik** bagi pengguna agar mencapai target hidrasi harian dengan jumlah minum optimal.
### **Langkah Algoritma**
1. **Input**: Berat badan pengguna → Hitung **target hidrasi** dalam ml (misalnya, `berat * 35 ml`).
2. **Bagi Waktu**: Total kebutuhan air dibagi dalam beberapa waktu optimal dalam sehari.
3. **Tentukan Waktu Minum**: Pilih waktu minum yang memberikan manfaat maksimal (misalnya, sebelum dan sesudah makan, setelah olahraga, dll.).
4. **Prioritas Notifikasi**: Pengingat dikirim dengan prioritas tinggi saat pengguna belum mencapai target dalam rentang waktu tertentu.
### **Contoh Implementasi**
Misalkan pengguna memiliki target **2.500 ml per hari**.
Algoritma Greedy akan membagi **2.500 ml** ke dalam **6 kali minum**:

| Waktu  | Jumlah Minum (ml) |
|--------|------------------|
| 08:00  | 500 ml          |
| 10:30  | 400 ml          |
| 12:00  | 400 ml          |
| 15:00  | 400 ml          |
| 18:00  | 400 ml          |
| 20:30  | 400 ml          |

Jika pengguna melewatkan satu waktu, sistem akan **menyesuaikan pengingat berikutnya** agar tetap mencapai target dalam sehari.


## 12. Contoh Skenario Penggunaan
### Skenario 1: Tambah Konsumsi Air
- Pengguna menambah konsumsi air sebanyak **500 ml**.
- Sistem menghitung sisa target dan menampilkan progres.
- Jika target belum tercapai, sistem memberikan notifikasi pengingat.
### Skenario 2: Notifikasi Pengingat
- Pengguna **tidak meminum cukup air** dalam beberapa jam.
- Aplikasi **mengirimkan notifikasi reminder** untuk mengingatkan pengguna minum air.

---