<?php
// Ket vincent: if guard memastikan request POST dari tombol form.
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
// Ket vincent: if isset memastikan field form lengkap sebelum dipakai.
if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    // Ket vincent: ternary memberi array kosong bila penulis tak dipilih.
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Perubahan buku berhasil diterima:<br>";
  echo "<pre>";
  // Ket vincent: print_r menampilkan bukti data form diterima.
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
