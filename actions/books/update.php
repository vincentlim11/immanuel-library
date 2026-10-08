<?php
// cuma lanjut kalau dari tombol ubah buku
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['ubah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
// wajib ada id plus semua field buku pas ngedit
if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'id' => $_POST['id'],
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    // penulis boleh kosong, defaultnya array kosong aja
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Perubahan buku berhasil diterima:<br>";
  echo "<pre>";
  // kasih liat data buku yang habis diupdate
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
