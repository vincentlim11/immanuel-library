<?php
// ambil id dari URL buat hapus data
if (isset($_GET['id'])) {
  // biar id-nya aman pas ditampilin
  echo "Pengguna dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID pengguna tidak ditemukan.";
}
