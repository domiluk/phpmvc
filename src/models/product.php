<?php

class Product
{
  public function getData(): array
  {
    $dsn = 'mysql:host=localhost;dbname=product_db;charset=utf8';

    $pdo = new PDO($dsn, 'product_db_user', 'secret', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $st = $pdo->query('SELECT * FROM product');

    return $st->fetchAll(PDO::FETCH_ASSOC);
  }
}
