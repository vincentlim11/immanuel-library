<?php
// cuma jalan kalau formnya beneran disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_kategori'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin fieldnya lengkap dulu biar nggak error
if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori baru berhasil diterima:<br>";
  echo "<pre>";
  // nampilin datanya biar kelihatan keproses
  print_r(['name' => $_POST['name'], 'description' => $_POST['description']]);
  echo "</pre>";
} else {
  echo "Data kategori tidak lengkap.";
}
