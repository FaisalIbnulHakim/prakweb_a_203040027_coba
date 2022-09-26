<?php
require 'functions.php';

$id = $_GET['id'];

$bk = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = '../index.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = '../index.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body class="bg-gray-500">
  <header class="max-w-lg mx-auto py-2">
    <h1 class="text-4xl font-bold text-white text-center">Tambah Data Buku</h1>
  </header>

  <main class="bg-gray-700 rounded-3xl shadow-2xl mx-8 lg:mx-36 p-6">
    <section>
      <h3 class="text-white font-bold text-2xl">Silahkan Menambah Buku</h3>
      <p class="text-white pt-2">Tambah Buku Baru Untuk Memperbanyak Daftarnya</p>
    </section>

    <section class="mt-6">
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $bk["id"]; ?>">
        <div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 bg-gray-500 rounded md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="judul">Judul </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="judul" id="judul" required value="<?= $bk["judul"]; ?>">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-500 md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="penulis">Penulis </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="penulis" id="penulis" required value="<?= $bk["penulis"]; ?>">
            </div>
          </div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 bg-gray-500 rounded md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="penerbit">Penerbit </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="penerbit" id="penerbit" required value="<?= $bk["penerbit"]; ?>">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-500 md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="jmlhalaman">Jumlah halaman </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="jmlhalaman" id="jmlhalaman" required value="<?= $bk["jmlhalaman"]; ?>">
            </div>
          </div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 bg-gray-500 rounded md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="harga">Harga </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="harga" id="harga" required value="<?= $bk["harga"]; ?>">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-500 md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="tahun">Tahun </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="tahun" id="tahun" required value="<?= $bk["tahun"]; ?>">
            </div>
          </div>
          <div class="md:flex md:space-x-4">
            <div class="mb-6 pt-3 rounded bg-gray-500 md:w-1/2">
              <input type="hidden" name="gambar_lama" value="<?= $bk["gambar"]; ?>">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="gambar">Gambar</label>
              <input type="file" name="gambar" id="gambar" onchange="previewImage()" class="gambar pt-1 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3">
              <img src="../img/<?= $bk["gambar"]; ?>" width="150" style="display: block;" class="img-preview mx-auto" alt="">
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-500 md:w-1/2">
              <label class="block text-white text-sm font-bold mb-2 ml-3" for="volume">Volume </label>
              <input class="pt-2 bg-gray-100 rounded w-full text-gray-900 focus:outline-none border-b-8 border-gray-100 focus:border-gray-600 transition duration-500 px-3 pb-3" type="text" name="volume" id="volume" required value="<?= $bk["volume"]; ?>">
            </div>
          </div>

          <div>
            <a href="admin.php" class="text-sm text-gray-200 hover:text-white hover:underline mb-6 ">Back</a>
          </div>
          <div class="flex justify-center">
            <button class="w-1/2 bg-gray-500 hover:bg-gray-800 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit" name="ubah">Go Insert</button>
          </div>
        </div>
      </form>
    </section>
  </main>
  <script src="../js/script.js"></script>
</body>

</html>