<?php
// liat id kategori dari url hapus
if (isset($_GET['id'])) {
  // tampilin id kategorinya secara aman
  echo "Kategori dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID kategori tidak ditemukan.";
}
