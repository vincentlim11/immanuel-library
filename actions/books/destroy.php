<?php
// nyomot id buku dari url buat dihapus
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // tampilin id bukunya yang aman biar rapi
  echo "Buku dengan id " . htmlspecialchars($id) . " berhasil dihapus.";
} else {
  echo "ID buku tidak ditemukan.";
}
