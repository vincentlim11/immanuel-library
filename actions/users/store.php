<?php
// cuma jalan kalau formnya beneran disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_pengguna'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin fieldnya lengkap dulu biar nggak error
if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Pengguna baru berhasil diterima:<br>";
  echo "<pre>";
  // nampilin datanya biar kelihatan keproses
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'password' => $_POST['password'], 'role' => $_POST['role']]);
  echo "</pre>";
} else {
  echo "Data pengguna tidak lengkap.";
}
