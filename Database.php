<?php

namespace Database;

use \PDO;

class Database
{
  private $db_host = "localhost";
  private $db_name = "asso_chats";
  private $db_user = "root";
  private $db_pass = "";
  private $charset = "utf8mb4";

  public function connect()
  {
    try {
      $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name . ";charset=" . $this->charset;
      $pdo = new \PDO($dsn, $this->db_user, $this->db_pass);
      $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
      $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
      return $this->pdo;
    } catch (\PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}

  // public function query($stmt, $class_name = null, $one = false)
  // {
  //   $req = $this->connect()->query($stmt);
  //   if (
  //     strpos($stmt, 'UPDATE') === 0 ||
  //     strpos($stmt, 'INSERT') === 0 ||
  //     strpos($stmt, 'DELETE') === 0
  //   ) {
  //     return $req;
  //   }
  //   if ($class_name === null) {
  //     $req->setFetchMode(PDO::FETCH_OBJ);
  //   } else {
  //     $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
  //   }

  //   if ($one) {
  //     $datas = $req->fetch();
  //   } else {
  //     $datas = $req->fetchAll();
  //   }
  //   return $datas;
  // }

  // public function prepare($stmt, $attributes, $class_name = null, $one = false)
  // {
  //   $req = $this->connect()->prepare($stmt);
  //   $res = $req->execute($attributes);
  //   if (
  //     strpos($stmt, 'UPDATE') === 0 ||
  //     strpos($stmt, 'INSERT') === 0 ||
  //     strpos($stmt, 'DELETE') === 0
  //   ) {
  //     return $res;
  //   }
  //   if ($class_name === null) {
  //     $req->setFetchMode(PDO::FETCH_OBJ);
  //   } else {
  //     $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
  //   }
  //   // $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
  //   if ($one) {
  //     $datas = $req->fetch();
  //   } else {
  //     $datas = $req->fetchAll();
  //   }
  //   return $datas;
  // }
