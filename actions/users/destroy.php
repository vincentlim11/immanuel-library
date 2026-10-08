<?php
// ambil id user dari parameter url
if (isset($_GET['id'])) {
  // keluarin id usernya dengan cara yang aman
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
