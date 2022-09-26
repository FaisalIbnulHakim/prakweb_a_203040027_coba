<?php
require 'functions.php';

$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Detail <?= $bk["judul"]; ?></title>
</head>

<body class="dark:bg-gray-500">
  <div class="h-auto ">
    <div id="main" class="bg-slate-300 mx-auto lg:my-28 my-10 lg:flex justify-start w-max">
      <div class="lg:max-w-lg max-w-sm bg-slate-300 p-4 shadow-2xl z-10 lg:border-white border-b-2 border-blue-500 border-opacity-50">
        <p class="flex justify-end"><a href="../index.php" class="max-w-max p-1 -mt-4 -mr-4 bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg></a></p>
        <p class="transform lg:hover:scale-110 transition-all duration-500 mx-auto mt-8"><img width="400" src="../img/<?= $bk["gambar"]; ?>" alt=""></p>
      </div>
      <div class="lg:max-w-lg max-w-sm p-8 bg-slate-300">
        <p class="uppercase font-bold tracking-wider mt-6 text-2xl"><?= $bk["judul"]; ?></p>
        <p class="font-semibold mt-2 text-xl"><?= $bk["penulis"]; ?></p>
        <p class="mt-3 font-semibold text-base"><?= $bk["penerbit"]; ?></p>
        <p class="mt-3 text-base">Volume : <?= $bk["volume"]; ?></p>
        <p class="mt-3 text-base">Jumlah Halaman : <?= $bk["jmlhalaman"]; ?></p>
        <p class="mt-3 text-base">Tahun Terbit : <?= $bk["tahun"]; ?></p>
        <div class="mt-10 flex justify-start ">
          <div class="transition ease-out duration-500 rounded-md p-2 bg-transparant border-2 border-gray-500 hover:border-tranparant hover:bg-gray-500 font-semibold w-32 hover:text-white cursor-pointer">
            <p class="mx-auto w-max "><a href="">ADD TO CART</a></p>
          </div>
          <div class="transition ease-out duration-500 rounded-md p-2 bg-transparant border-2 border-gray-500 hover:border-tranparant hover:bg-gray-500 font-semibold w-32 ml-8 hover:text-white cursor-pointer">
            <p class="mx-auto w-max"><a href="">PURCHASE</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>