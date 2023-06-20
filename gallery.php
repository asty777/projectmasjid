<!DOCTYPE html>
<html lang="en">
<head>
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
                <img class="h-96 w-full rounded-2xl"
                src="https://images.pexels.com/photos/4464601/pexels-photo-4464601.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="Masjid Bogor">
                <img class="h-96 w-full rounded-2xl"
                src="https://images.pexels.com/photos/7317551/pexels-photo-7317551.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="Masjid Bogor">
                <img class="h-96 w-full rounded-2xl"
                src="https://images.pexels.com/photos/9486104/pexels-photo-9486104.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="Masjid Bogor">
                <img class="h-96 w-full rounded-2xl"
                src="https://images.pexels.com/photos/1064766/pexels-photo-1064766.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="Masjid Bogor">
            </div>
            </div>
        </section>
    </div>    
</body>
</html>