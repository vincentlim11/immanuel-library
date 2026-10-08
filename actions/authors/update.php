<?php
// kalau bukan dari tombol ubah penulis ya nggak usah lanjut
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin id nama sama bio kebawa semua pas edit penulis
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  // spill data penulis yang barusan diubah
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
