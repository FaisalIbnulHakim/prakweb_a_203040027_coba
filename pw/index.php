<?php
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Buku Online</title>
</head>

<body class="dark:bg-gray-500">

  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-700">
    <div class="container flex flex-wrap justify-between items-center mx-auto" bis_skin_checked="1">
      <h1 class=" font-bold text-6xl text-center text-white">Fiuls Comic's</h1>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default" bis_skin_checked="1">
        <a class="font-bold text-xl text-center text-white " href="php/admin.php">Admin Page</a>
      </div>
    </div>
  </nav>
  <div class="w-full dark:bg-gray-500">
    <div class="container">
      <div class="w-full pl-16 lg:pl-72 lg:pr-12 mt-8 grid sm:grid-cols-1 lg:grid-cols-4 gap-12 gap-x-52">
        <?php foreach ($buku as $bk) : ?>
          <div class="bg-slate-800 border-2 border-gray-400 rounded-md overflow-hidden shadow-lg p-1 w-max mb-5">
            <img class="hover:shadow-lg box-border h-96 w-64 border-2 border-zinc-600 py-4 rounded-lg bg-slate-300 shadow-inner" src="img/<?= $bk["gambar"]; ?>" width="150" alt="">
            <div class="m-4">
              <span class="text-base font-bold text-white"><?= $bk["judul"]; ?></span>
              <span class="text-base block font-semibold text-gray-300">RP. <?= $bk["harga"]; ?></span>
            </div>
            <div class="flex justify-end">
              <div class="animate-pulse hover:shadow-md mr-3 mb-2 bg-zinc-500 text-gray-50 text-xs font-bold rounded-full p-1 pr-2 cursor-pointer w-max">
                <svg class="w-4 inline-block " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
                <a href="php/detail.php?id=<?= $bk['id']; ?>"><span>Check</span></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</body>

</html>