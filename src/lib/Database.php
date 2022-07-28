<?php

namespace Lib\Database;

use PDO;

require_once('src/lib/config.php');
// require_once('../../src/lib/config.php');

class DatabaseConnection
{
  public ?PDO $database = null;
  public function getConnection(): PDO
  {
    if ($this->database === null) {

      $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . CHARSET;
      $this->database = new \PDO($dsn, DB_USER, DB_PASS);
      $this->database->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->database->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
      $this->database->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }
    return $this->database;
  }
}
