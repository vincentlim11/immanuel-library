<?php
// cuma jalan kalau formnya beneran disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_penulis'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin fieldnya lengkap dulu biar nggak error
if (isset($_POST['id'], $_POST['name'], $_POST['bio'])) {
  echo "Perubahan penulis berhasil diterima:<br>";
  echo "<pre>";
  // nampilin datanya biar kelihatan keproses
  print_r(['id' => $_POST['id'], 'name' => $_POST['name'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data penulis tidak lengkap.";
}
