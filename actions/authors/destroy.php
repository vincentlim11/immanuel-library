<?php
// Ket vincent: if isset membaca id dari URL untuk hapus.
if (isset($_GET['id'])) {
  // Ket vincent: htmlspecialchars mengamanatkan id saat tampil.
  echo "Penulis dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID penulis tidak ditemukan.";
}
