<?php
// abaikan kalau bukan postingan form ubah profil
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_profil'])) {
  echo "Akses tidak valid.";
  return;
}
// nama email telpon alamat bio profil dicek satu-satu
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "Perubahan profil berhasil diterima:<br>";
  echo "<pre>";
  // cetak ulang data profil yang barusan disimpan
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data profil tidak lengkap.";
}
