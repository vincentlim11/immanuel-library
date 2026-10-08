<?php
// Ket vincent: if guard memastikan request POST dari tombol form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_profil'])) {
  echo "Akses tidak valid.";
  return;
}
// Ket vincent: if isset memastikan field form lengkap sebelum dipakai.
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
  echo "Perubahan profil berhasil diterima:<br>";
  echo "<pre>";
  // Ket vincent: print_r menampilkan bukti data form diterima.
  print_r(['name' => $_POST['name'], 'email' => $_POST['email'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'bio' => $_POST['bio']]);
  echo "</pre>";
} else {
  echo "Data profil tidak lengkap.";
}
