<?php
// skip kalau bukan submit tombol tambah kategori
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// nama dan deskripsi kategori harus ada dua-duanya
if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  // sodorin lagi data kategori yang baru ditambah
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
