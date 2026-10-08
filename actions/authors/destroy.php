<?php
// ambil id dari URL buat hapus data
if (isset($_GET['id'])) {
  // biar id-nya aman pas ditampilin
  echo "Penulis dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID penulis tidak ditemukan.";
}
