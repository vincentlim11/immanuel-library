<?php
// Ket vincent: if isset membaca id dari URL untuk hapus.
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Ket vincent: htmlspecialchars mengamanatkan id saat tampil.
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
