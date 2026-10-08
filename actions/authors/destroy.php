<?php
// ngintip id penulis dari link yang diklik
if (isset($_GET['id'])) {
  // tampilin id penulisnya dengan aman biar html-nya nggak jebol
  echo "Penulis dengan id " . htmlspecialchars($_GET['id']) . " berhasil dihapus.";
} else {
  echo "ID penulis tidak ditemukan.";
}
