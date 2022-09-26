<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "prakweb_a_203040027_pw");

  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$query");

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $jmlhalaman = htmlspecialchars($data['jmlhalaman']);
  $harga = htmlspecialchars($data['harga']);
  $tahun = htmlspecialchars($data['tahun']);
  $volume = htmlspecialchars($data['volume']);

  $query = "INSERT INTO buku
                    VALUES
                    ('','$judul','$penulis','$penerbit','$jmlhalaman','$harga','$tahun','$gambar','$volume')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  $bk = query("SELECT * FROM buku WHERE id = $id");
  if ($bk['gambar'] != 'nophoto.png') {
    unlink('../img/' . $bk['gambar']);
  }
  mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar_lama = htmlspecialchars($data['gambar_lama']);
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $jmlhalaman = htmlspecialchars($data['jmlhalaman']);
  $harga = htmlspecialchars($data['harga']);
  $tahun = htmlspecialchars($data['tahun']);
  $volume = htmlspecialchars($data['volume']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  if ($gambar == 'nophoto.png') {
    $gambar = $gambar_lama;
  }

  $query = "UPDATE buku SET 
  judul = '$judul',
  penulis = '$penulis',
  penerbit = '$penerbit',
  jmlhalaman = '$jmlhalaman',
  harga = '$harga',
  tahun = '$tahun',
  gambar = '$gambar',
  volume = '$volume'
  WHERE id = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  // ketika tidak ada gambar yang dipilih
  if ($error == 4) {
    // echo "<script>
    //         alert('pilih gambar terlebih dulu');
    //        </script>";
    return 'nophoto.png';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = end($ekstensi_file);
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('yang anda pilih bukan gambar');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar');
          </script>";
    return false;
  }
  // cek ukuran file
  // maksimal 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran file terlalu besar');
          </script>";
    return false;
  }
  // lolos pengecekan 
  // siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);
  return $nama_file_baru;
}
