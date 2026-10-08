<?php
// kalau bukan dari tombol tambah penulis ya ditolak aja
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// cek dulu nama sama bio penulisnya udah keisi belum
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  // tampilin balik data penulis yang baru masuk
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
