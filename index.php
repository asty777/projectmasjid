<?php
require 'function.php';
$teacher = query("SELECT * FROM `data`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMK Wikrama - Bogor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <style>
    * {
      font-family: 'Inter';
    }

    .text-main {
      color: "#1F3984" !important
    }

    .bg-main {
      background-color: '#1F3984' !important
    }
  </style>
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
          <a href="#hero-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Beranda</a>
          <a href="#tutorial-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Cara Wakaf</a>
          <a href="#donation-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Data Wakaf</a>
          <a href="#gallery-section" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Gallery</a>
          <a href="https://smkwikrama.sch.id/" class="transition duration-300 focus:outline-none focus:text-black focus:underline hover:underline hover:text-blue-950" style="text-underline-offset: 8px;">Web Wikrama</a>
        </div>

        <!-- Desktop Menu -->
        <div class="flex flex-col md:flex-row xs:space-y-4 md:space-x-4 md:items-center md:bg-red-200 md:hidden hidden">
          <a href="#hero-section">Beranda</a>
          <a href="#tutorial-section">Cara Wakaf</a>
          <a href="#donation-section">Data Wakaf</a>
          <a href="#gallery-section">Gallery</a>
          <a href="https://smkwikrama.sch.id/">Web Wikrama</a>
        </div>

      </div>
    </div>
    <div class="flex flex-col space-y-7 md:space-y-40">
      <section id="hero-section">
        <div class="flex flex-col md:flex-row space-y-7 items-center">
          <div class="flex flex-col space-y-4 md:space-y-14">
            <div class="flex flex-col space-y-4 md:space-y-2">
              <p class="text-gray-400 w-full  text-sm md:text-lg">Masjid Besar SMK Wikrama Bogor</p>
              <h1 class="text-xl md:text-4xl font-semibold text-black w-full ">Mari <span
                  class="text-blue-900">Tingkatkan
                  Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
            </div>
            <a href="tambah.php"
              class="bg-blue-900 w-full px-2 py-2 md:w-fit md:px-5 md:py-2 rounded-xl text-white text-lg md:text-xl">Beri
              Bantuan shodaqoh</a>
          </div>
          <img class="flex justify-end h-96 w-full md:w-1/2" src="img/bagan.png" alt="hero">
        </div>

      </section>
      <section id="dana-section">
        <div class="flex-col bg-white border rounded-lg shadow-xl">
          <div class="flex flex-col p-8 space-y-4">
            <div class="flex flex-row">
              <div class="flex flex-row flex-1">
                <div class="flex  flex-col space-y-2 flex-1">
                  <p class="text-sm text-gray-400">Total Target Dana</p>
                  <p class="text-3xl text-black font-bold">Rp.40.000.000</p>
                </div>
                <div class="flex flex-col space-y-2 flex-1">
                  <p class="text-sm text-gray-400">Total Dana Terkumpul</p>
                  <p class="text-3xl text-black font-bold">Rp.4.000.000</p>
                </div>
              </div>
              <div class="flex flex-col space-y-2">
                <p class="text-sm text-gray-400">Total Donatur</p>
                <p class="text-3xl text-black font-bold">34 Orang</p>
              </div>
            </div>
            <div class="flex flex-row mt-4 space-x-4 items-center">
              <div class="basis-9/12">
                <div class="h-11 w-full bg-gray-200 rounded-md">
                  <div class="h-full w-[20%] bg-blue-900 rounded-md"></div>
                </div>
              </div>
              <div class="basis-3/12">
                <p class="text-md font-bold text-blue-900"><span class="text-2xl">30%</span> Terpenuhi</p>
              </div>
            </div>
          </div>
          <div class="w-full bg-blue-900 p-2 ">
            <marquee behavior="" direction="">
              <p class="text-white text-lg">Muhamad Ridwan - <span class="text-yellow-300">Uang :
                  Rp.2.000,000</span><span class="text-gray-400"> . </span>
                Hamba Allah - <span class="text-yellow-300">Barang : Emas </span><span class="text-gray-400"> . </span>
                Siti Aisyah - <span class="text-yellow-300">Uang : Rp.2.000,000</span><span class="text-gray-400"> .
                </span></p>
            </marquee>
          </div>
        </div>
      </section>
      <section id="banner-section">
        <div class="flex">
          <img class="h-60 object-cover w-full rounded-2xl"
            src="https://images.pexels.com/photos/460680/pexels-photo-460680.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
            alt="">
        </div>
      </section>
      <section id="benefit-section">
        <div class="flex flex-col space-y-4 md:space-y-7">
          <h1 class="text-xl md:text-4xl font-semibold text-black w-full md:w-4/5"><span
              class="text-blue-900">Manfaat</span> Wakaf, infaq shodaqoh.</h1>
          <p class="text-gray-400 w-full md:w-3/5 text-sm md:text-lg">Berikut adalah beberapa keutamaan wakaq, infaq
            shodaqoh yang akan anda dapatkan.</p>
          <div class="flex flex-row space-x-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 basis-3/4">
              <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
                <img class="w-12 h-12" src="img/love.png">
                <p class="font-bold text-xl md:text-2xl text-black">Menjadikan hati lebih tenang</p>
                <p class="text-sm md:text-md text-gray-400">Kami memberikan harga yang terbaik dibandingkan dengan
                  Kompetitor kami</p>
              </div>
              <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
                <img class="w-12 h-12" src="img/ceklis.png">
                <p class="font-bold text-xl md:text-2xl text-black">Terbukanya pintu rezeki</p>
                <p class="text-sm md:text-md text-gray-400">Allah SWT akan membuka pintu rezeki dari arah yang tidak
                  dikira sebelumnya.</p>
              </div>
              <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
                <img class="w-12 h-12" src="img/ceklis2.png">
                <p class="font-bold text-xl md:text-2xl text-black">Menjauhkan dari bahaya</p>
                <p class="text-sm md:text-md text-gray-400">Rasulullah SAW pernah bersabda: “Bersegeralah untuk
                  bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."</p>
              </div>
              <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
                <img class="w-12 h-12" src="img/bintang.png">
                <p class="font-bold text-xl md:text-2xl text-black">pahala yang tak terputus</p>
                <p class="text-sm md:text-md text-gray-400">Ini akan menolong kita di akhirat nantinya, juga dapat
                  menyelamatkannya dari api neraka.</p>
              </div>
            </div>
            <div class="basis-1/4">
              <img class="  h-5/6 w-96 md:h-full md:w-full" src="img/manfaat.png" alt="hero">
            </div>
          </div>
        </div>
      </section>
      <section id="tutorial-section">
        <div class="flex flex-col space-y-4 md:space-y-7">
          <h1 class="text-xl md:text-4xl font-semibold text-black w-full md:w-4/5"><span class="text-blue-900">Cara
              Melakukan</span> Wakaf, infaq shodaqoh.</h1>
          <p class="text-gray-400 w-full md:w-3/5 text-sm md:text-lg">Berikut adalah Cara melakukan wakaq, infaq
            shodaqoh
            untuk membantu pembangunan masjid besar SMK Bogor</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
            <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
              <p class="font-bold text-lg md:text-2xl text-blue-900">01</p>
              <p class="font-bold text-xl md:text-3xl text-black">Isi Form data diri</p>
              <p class="text-sm md:text-md text-gray-400">Isikan form pengisian yang disediakan di form data diri,
                isikan
                dengan data diri anda dengan teliti.</p>
            </div>
            <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
              <p class="font-bold text-lg md:text-2xl text-blue-900">02</p>
              <p class="font-bold text-xl md:text-3xl text-black">Isikan nominal shodaqoh</p>
              <p class="text-sm md:text-md text-gray-400">Isikan nominal yang akan anda shodaqohkan, pastikan isi
                nominal
                dengan seiklasnya tanpa ada paksaan apapun.</p>
            </div>
            <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
              <p class="font-bold text-lg md:text-2xl text-blue-900">03</p>
              <p class="font-bold text-xl md:text-3xl text-black">upload bukti pembayaran</p>
              <p class="text-sm md:text-md text-gray-400">Pilih motode pembayaran dan upload bukti pembayaranya.</p>
            </div>
            <div class="flex flex-col bg-white shadow-xl border-2 p-7 rounded-2xl space-y-3">
              <p class="font-bold text-lg md:text-2xl text-blue-900">04</p>
              <p class="font-bold text-xl md:text-3xl text-black">Verifikasi Pembayaran</p>
              <p class="text-sm md:text-md text-gray-400">Pembayaran anda akan di verifikasi oleh admin dan jika
                terverifikasi nama anda akan tampil.</p>
            </div>
          </div>
        </div>
      </section>
      <section id="donation-section">
        <div class="flex flex-col space-y-4 md:space-y-7">
          <h1 class="text-xl md:text-4xl font-semibold text-black w-full md:w-4/5"><span class="text-blue-900">Data
              Donatur</span> Wakaf, infaq shodaqoh.</h1>
          <p class="text-gray-400 w-full md:w-3/5 text-sm md:text-lg">Berikut adalah Cara melakukan wakaq, infaq
            shodaqoh
            untuk membantu pembangunan masjid besar SMK Bogor</p>
          <div class="container mx-auto px-12 sm:px-8">
            <div class="py-8">
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-2 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-sm border-gray-200 border-b-1 rounded-lg overflow-hidden">
                  <table class="min-w-full leading-normal">
                    <thead>
                      <tr>
                        <th
                          class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                          Nama Donatur
                        </th>
                        <th
                          class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                          Donatur ID
                        </th>
                        <th
                          class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                          Paket
                        </th>
                        <th
                          class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                          Kategori
                        </th>
                        <th
                          class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                          Nominal/barang
                        </th>
                        <th class="px-5 py-3 border-b-1 border-gray-200 bg-gray-50"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($teacher as $guru) { ?>
                      <tr>
                        <td class="px-2 py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                <?= $guru["nama"]?>
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-900 whitespace-no-wrap">
                            <?= $guru["id"]?>
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-400 whitespace-no-wrap">
                            <?= $guru["paket"]?>
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-400 whitespace-no-wrap">
                            <?= $guru["kategori"]?>
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                          <p class="text-gray-400 whitespace-no-wrap">
                            <?= $guru["barang"]?>
                          </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                          <button type="button" class="inline-block text-gray-400 hover:text-gray-500">
                            <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                              <path
                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                            </svg>
                          </button>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="gallery-section">
        <div class="flex flex-col pt-10 space-y-4 md:space-y-7">
          <h1 class="text-xl md:text-4xl font-semibold text-black w-full md:w-4/5"><span class="text-blue-900">Gallery
            </span>Masjid Besar SMK Wikrama Bogor.</h1>
          <p class="text-gray-400 w-full md:w-3/5 text-sm md:text-lg">Berikut adalah gallery masjid besar SMK Wikrama
            Bogor.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
            <img class="h-96 w-full rounded-2xl"
              src="https://images.pexels.com/photos/337901/pexels-photo-337901.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt="Masjid Bogor">
            <img class="h-96 w-full rounded-2xl"
              src="https://images.pexels.com/photos/2079666/pexels-photo-2079666.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt="Masjid Bogor">
            <img class="h-96 w-full rounded-2xl"
              src="https://images.pexels.com/photos/337904/pexels-photo-337904.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt="Masjid Bogor">
            <img class="h-96 w-full rounded-2xl"
              src="https://images.pexels.com/photos/3290075/pexels-photo-3290075.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt="Masjid Bogor">
            <img class="h-96 w-full rounded-2xl"
              src="https://images.pexels.com/photos/3214994/pexels-photo-3214994.jpeg?auto=compress&cs=tinysrgb&w=1600"
              alt="Masjid Bogor">
            <div class="flex h-96 w-full bg-blue-900 rounded-2xl items-center justify-center">
              <a href="gallery.php" class=" text-white font-semibold"><i data-feather="arrow-right"></i>Buka Galeri</a>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <footer>
    <div class="flex flex-col absolute  pt-44 left-0 right-0">
      <div class="absolute left-0 right-0"></div>
      <div class="p-10 bg-blue-950 text-white">
        <div class=" max-w-7xl mx-auto">
          <div class="grid grid-cols-1 md:grid grid-cols-2 lg:grid-cols-4 gap-2">
            <div class="mb-5">
              <div class="flex flex-row space-x-2">
                <img class="w-10 h-10" src="img/logo wk.png">
                <strong>
                  <h2 class="pb-4 mb-5 pt-2 text-xl">SMK Wikrama Bogor</h2>
                </strong>
              </div>
              <strong>Alamat</strong><br>
              Jl. Raya Wangun<br>
              Kelurahan Sindangsari<br>
              Bogor Timur 16720<br><br>
              <strong>Telepon</strong><br>
              0251-8242411 /<br>
              082221718035 (Whatsapp)<br>
              <div class="pt-5 text-xl text-black mb-2">
                <a href="#" class="w-7 h-7 rounded-sm bg-white hover:bg-yellow-600 mx-1 inline-block pt-1"><i
                    data-feather="facebook"></i></a>
                <a href="#" class="w-7 h-7 rounded-sm bg-white hover:bg-yellow-600 mx-1 inline-block pt-1"><i
                    data-feather="instagram"></i></a>
                <a href="#" class="w-7 h-7 rounded-sm bg-white hover:bg-yellow-600 mx-1 inline-block pt-1"><i
                    data-feather="twitter"></i></a>
                <a href="#" class="w-7 h-7 rounded-sm bg-white hover:bg-yellow-600 mx-1 inline-block pt-1"><i
                    data-feather="youtube"></i></a>
              </div>
            </div>

            <div class="mb-5">
              <strong>
                <h4 class="pb-4">Tentang Wikrama</h4>
              </strong>
              <ul class="list-disc">
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Sejarah</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Peraturan Sekolah</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Rencana Strategi & Prestasi</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Yayasan</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Struktur Organisasi</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Cabang</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Penghargaan</a></li>
                <li class="pb-4"><i class="fa-fa-chevron-right text-yellow-300"></i><a href="#"
                    class="hover:text-yellow-300">Kerjasama</a></li>
              </ul>
            </div>
            <div class="mb-5">
            </div>
            <div class="">
              <strong>
                <h4>Kirim Pesan</h4>
              </strong>
              <form class="">
                <div class="flex flex-col space-y-6 mt-5">
                  <input type="text" class="text-gray-500 px-4 py-2 rounded-md  focus:border-yellow-500"
                    placeholder="kirim pesan" />
                  <input type="text" class="text-gray-500 px-4 py-2 rounded-md  focus:border-yellow-500"
                    placeholder="email" />
                  <textarea class="text-gray-500 px-4 py-2 rounded-md  focus:border-yellow-500"
                    placeholder="pesan Anda"></textarea>
                  <button
                    class="p-2 w-28 h-11 rounded-md bg-yellow-300 text-black hover:bg-yellow-500">submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full bg-white text-blue-950 px-10">
        <div class="max w-7xl flex flex-col sm:flex flex-row py-4 mx-auto justify-between items-center ">
          <div class="text-center">
            <div>
              Copyright &copy; 2023 - SMK Wikrama Bogor. All Right Reserved.
            </div>
            <div>
             <a href="#" class="text=blue-950"> | Ni Kadek Belinda Asty</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  </div>
  <script src="script.js"></script>
  <script>
    feather.replace()
    document.getElementById('hamburger-btn').addEventListener('click', function() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>
</body>




</html>