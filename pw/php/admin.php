<?php
require 'functions.php';
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
      <h1 class=" font-bold text-6xl text-center text-white">Fiuls Comic</h1>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default" bis_skin_checked="1">
        <ul class="flex flex-col p-4 mt-4  rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
          <li>
            <a class="font-bold text-xl text-center text-white" href="../index.php">Main Page</a>
          </li>
          <li>
            <a class="font-bold text-xl text-center text-white" href="create.php">Tambah Data</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="w-full">
    <table class="flex justify-center text-sm text-left text-gray-200 mt-8" border="1" cellpadding="10" cellspacing="0">
      <tr class="text-center text-lg text-gray-200 uppercase bg-gray-50 dark:bg-gray-700">
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Jumlah Halaman</th>
        <th>Volume</th>
        <th>Harga</th>
        <th>Tahun Terbit</th>
        <th>Cover</th>
        <th>Setting</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($buku as $bk) : ?>
        <tr class="text-lg text-center bg-white border-b-4 dark:bg-gray-900 dark:border-gray-700">
          <th><?= $i; ?></th>
          <th><?= $bk["judul"]; ?></th>
          <th><?= $bk["penulis"]; ?></th>
          <th><?= $bk["penerbit"]; ?></th>
          <th><?= $bk["jmlhalaman"]; ?></th>
          <th><?= $bk["volume"]; ?></th>
          <th>Rp.<?= $bk["harga"]; ?></th>
          <th><?= $bk["tahun"]; ?></th>
          <th><img width='200' src="../img/<?= $bk["gambar"]; ?>"></th>
          <th>
            <a href="update.php?id=<?= $bk['id']; ?>" class="text-green-500">Ubah Data</a>
            <br>
            <a href="delete.php?id=<?= $bk["id"]; ?>" class="text-red-500" onclick="return confirm('Yakin ingin hapus buku tersebut')">Hapus Data</a>
          </th>
        </tr>
        <?php $i++;  ?>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>