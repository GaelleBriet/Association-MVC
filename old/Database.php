<?php

// namespace Database;

// use \PDO;

// class Database
// {
//   private $db_host = "localhost";
//   private $db_name = "asso_chats";
//   private $db_user = "root";
//   private $db_pass = "";
//   private $charset = "utf8mb4";

//   public function connect()
//   {
//     try {
//       $dsn = "mysql:host=" . $this->db_host . ";dbname=" . $this->db_name . ";charset=" . $this->charset;
//       $pdo = new \PDO($dsn, $this->db_user, $this->db_pass);
//       $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//       $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
//       $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
//       return $pdo;
//     } catch (\PDOException $e) {
//       echo "Connection failed: " . $e->getMessage();
//     }
//   }

//   public function query($stmt)
//   {
//     $req = $this->connect()->query($stmt);
//     return $req;
//     var_dump($req);
//     echo ('test');
//   }
// }
