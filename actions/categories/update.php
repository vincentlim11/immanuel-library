<?php
// berhenti kalau bukan dari tombol ubah kategori
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// id nama deskripsi kategori dicek kelengkapannya
if (isset($_POST['id'], $_POST['name'], $_POST['description'])) {
  echo "Perubahan kategori berhasil diterima:<br>";
  echo "<pre>";
  // perlihatkan hasil edit kategorinya
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
