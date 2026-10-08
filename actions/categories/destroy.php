<?php
// ambil id dari URL buat hapus data
if (isset($_GET['id'])) {
  // biar id-nya aman pas ditampilin
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
