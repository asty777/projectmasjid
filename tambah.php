<?php
require 'function.php';
$conn = mysqli_connect("localhost", "root", "", "db_donation");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0){
        echo "
           <script>
            alert('data berhasil ditambah !');
            document.location.href = 'index.php';
           </script>
         ";

    } else {
        echo "
           <script>
            alert('data gagal ditambah !');
            document.location.href = 'index.php';
           </script>
         ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="w-full md:w-[964px] mx-auto">
    <div class="flex flex-col px-4 md:px-16">
        <div>
        <div class="flex flex-col md:flex-row md:justify-between md:items-center py-8 md:py-16 space-y-8 md:space-y-0">
            <div class="flex flex-row space-x-4 justify-between items-center">
            <div class="flex flex-row space-x-4 items-center">
                <img class="w-12 h-12" src="img/logo wk.png">
                <span class="font-bold text-xl">SMK Wikrama Bogor</span>
            </div>
            <div id="hamburger-btn" class="md:hidden">
                <i data-feather="menu"></i>
            </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="flex flex-col md:flex-row xs:space-y-4 md:space-x-4 md:items-center hidden md:block">
            <a href="index.php#hero-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Beranda</a>
            <a href="index.php#tutorial-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Cara Wakaf</a>
            <a href="index.php#donation-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Data Wakaf</a>
            <a href="index.php#gallery-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Gallery</a>
            <a href="https://smkwikrama.sch.id/" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Web Wikrama</a>
            </div>

            <!-- Desktop Menu -->
            <div class="flex flex-col md:flex-row xs:space-y-4 md:space-x-4 md:items-center md:bg-red-200 md:hidden hidden">
            <a href="index.php">Beranda</a>
            <a href="#tutorial-section">Cara Wakaf</a>
            <a href="#donation-section">Data Wakaf</a>
            <a href="#gallery-section">Gallery</a>
            <a href="https://smkwikrama.sch.id/">Web Wikrama</a>
            </div>

        </div>
        </div>
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
          <div class="w-full max-w-md space-y-8">
            <div>
              <img class="mx-auto h-50 w-auto" src="img/money.png" alt="Your Company">
              <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Isi form untuk donasi!</h2>
            </div>
            <form class="mt-8 space-y-6" action="" method="post">
              <input type="hidden" name="remember" value="true">
              <div class="-space-y-px rounded-md shadow-sm">
                <div>
                  <label for="nama" class="sr-only">Nama</label>
                  <input id="nama" name="nama" type="text" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Nama">
                </div>
                <div>
                  <label for="id" class="sr-only">id</label>
                  <input id="id" name="id" type="int" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="ID">
                </div>
                <div>
                  <label for="paket" class="sr-only">paket</label>
                  <input id="paket" name="paket" type="text" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Paket">
                </div>
                <div>
                  <label for="kategori" class="sr-only">kategori</label>
                  <input id="kategori" name="kategori" type="text" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Kategori">
                </div>
                <div>
                  <label for="barang" class="sr-only">barang</label>
                  <input id="barang" name="barang" type="text" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Nominal/barang">
                </div>
              </div>
              <div>
                <button type="submit" name="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-blue-900 py-2 px-4 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-800 focus:ring-offset-2">
                    submit
                </button>
              </div>
            </form>
          </div>
        </div>
</body>
</html>



