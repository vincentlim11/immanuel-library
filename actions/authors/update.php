<?php
// Ket vincent: if guard memastikan request POST dari tombol form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// Ket vincent: if isset memastikan field form lengkap sebelum dipakai.
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  // Ket vincent: print_r menampilkan bukti data form diterima.
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
