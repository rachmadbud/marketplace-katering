## Tentang Aplikasi Marketplace Katering

Projct ini baru membuat untuk akun merchant

## Spesifikasi

-   "laravel/framework": "^11.9",
-   "php" : "8.2"

## Poin yang telah diselesaikan

-   Login
-   Register
-   2 Role (Merchant & Custommer)
-   Create Profile
-   Get data Menu

## Installation

## 1. Clone project

```bash
git clone https://github.com/rachmadbud/marketplace-katering
```

## 2. Install Dependensi:

Buka terminal, dan pastikan terminal berada di direktori project, masukkan perintah

```bash
composer update
```

## 3. Buat file .env

Copy file .env.example rename menjadi .env

## 4. Jalankan perintah

Agar kode key dibuat

```bash
php artisan key:generate
```

## 5. Buat Database dengan nama:

```bash
marketplacekatering
```

## 6. Jalankan perintah untuk membuat isi database:

```bash
php artisan migrate
```

## 7. Membuat Role Premission:

Dibuat agar masing-masih role akan membedakan login nya

```bash
php artisan db:seed --class=RolesTableSeeder
```
