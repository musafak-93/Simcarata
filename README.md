<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# SIMCARATA

Simcarata merupakan sistem informasi cabang ranting tegalrejo untuk mengelola data kegiatan, aset, organisasi dan anggota. Simcarata dikembangkan menggunakan framework laravel 8 dengan template admin CMS Voyager


## Features

- Login
- Logout
- Dasboard Admin
- Edit Akun
- Ubah Password
- Role User
- CRUD data di halaman admin


## System Requirements

- PHP => 7.4.15
- Laravel => 8
- MySQL => 5.7.33
- Laragon
- Visual studio code
## Installation

Install my-project with clone using link HTTP Github

- Clone the repository
  ```bash
  git clone https://github.com/musafak-93/Simcarata.git
  ```
- Install dependencies using composer install
  ```bash
  composer install
  ```
- Copy the .env.example file to .env
  ```bash
  cp .env.example .env
  ```
- Generate the APP_KEY.
  ```bash
  php artisan key:generate
  ```
- Create database in PhpMyAdmin and update name database in file .env
- Run php artisan migrate to migrate the database
  ```bash
  php artisan migrate
  ```
- Run php artisan serve
  ```bash
  php artisan serve
  ```

    
## Screenshots
- Beranda
  ![image](https://github.com/musafak-93/Simcarata/assets/62982123/59535c53-57c8-492c-9693-df8d29bd2eac)
- Login
- Dasboard Admin
- Akun
- Post
- Pimpinan
- Anggota
- AUM
- Aset
- Akun
- Data Master
- Tool
- Settings
## Used By

This project is used by the following companies:

- Pimpinan Cabang Muhammadiyah Tegalrejo


## Feedback

If you have any feedback, please reach out to us at mus.safak93@gmail.com
