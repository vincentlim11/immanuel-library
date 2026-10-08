<?php
// Ket vincent: if guard memastikan request POST dari tombol form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// Ket vincent: if isset memastikan field form lengkap sebelum dipakai.
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  // Ket vincent: print_r menampilkan bukti data form diterima.
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
