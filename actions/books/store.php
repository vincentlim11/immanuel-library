<?php
// cuma jalan kalau formnya beneran disubmit
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['tambah_buku'])) {
  echo "Akses tidak valid.";
  return;
}
// pastiin fieldnya lengkap dulu biar nggak error
if (isset($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $data = [
    'title' => $_POST['title'],
    'isbn' => $_POST['isbn'],
    'year' => $_POST['year'],
    'stock' => $_POST['stock'],
    'category_id' => $_POST['category_id'],
    'description' => $_POST['description'],
    // kalau penulisnya nggak dipilih yaudah kosongin aja
    'author_ids' => isset($_POST['author_ids']) ? $_POST['author_ids'] : [],
  ];
  echo "Buku baru berhasil diterima:<br>";
  echo "<pre>";
  // nampilin datanya biar kelihatan keproses
  print_r($data);
  echo "</pre>";
} else {
  echo "Data buku tidak lengkap.";
}
