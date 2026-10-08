<?php
// ambil id dari URL buat hapus data
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // biar id-nya aman pas ditampilin
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
