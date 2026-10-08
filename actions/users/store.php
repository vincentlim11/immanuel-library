<?php
// nggak diproses kalau bukan dari tombol tambah pengguna
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// nama email password roleuser wajib keisi semua
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  // tunjukin data pengguna baru yang masuk
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
