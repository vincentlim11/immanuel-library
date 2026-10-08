<?php
// Ket vincent: if guard memastikan request POST dari tombol form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// Ket vincent: if isset memastikan field form lengkap sebelum dipakai.
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  // Ket vincent: print_r menampilkan bukti data form diterima.
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
