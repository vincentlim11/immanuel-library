<?php

// Ket vincent: fungsi getCategories merakit daftar kategori contoh.
function getCategories() {
  return [
    ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3],
    ["id" => 2, "name" => "Sains", "description" => "Buku ilmu pengetahuan alam", "total_books" => 0],
    ["id" => 3, "name" => "Sejarah", "description" => "Buku sejarah dan biografi", "total_books" => 1],
    ["id" => 4, "name" => "Teknologi", "description" => "Buku pemrograman dan teknologi", "total_books" => 0],
  ];
}

// Ket vincent: fungsi getCategory mengambil satu kategori contoh untuk edit.
function getCategory() {
  return ["id" => 1, "name" => "Fiksi", "description" => "Novel dan cerita rekaan", "total_books" => 3];
}
