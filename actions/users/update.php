<?php
// mundur kalau requestnya bukan ubah pengguna
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// id nama email role dicek biar komplit pas edit user
if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
  echo "Perubahan pengguna berhasil diterima:<br>";
  echo "<pre>";
  // buka-bukaan data user yang habis diubah
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
