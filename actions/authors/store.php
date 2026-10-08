<?php
// cuma jalan kalau formnya beneran disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin fieldnya lengkap dulu biar nggak error
if (isset($_POST['name'], $_POST['bio'])) {
  echo "Penulis baru berhasil diterima:<br>";
  echo "<pre>";
  // nampilin datanya biar kelihatan keproses
  print_r(['name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
