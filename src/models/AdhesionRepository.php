<!-- <?php

namespace Models\AdhesionRepository;

require_once('src/lib/Database.php');

use Lib\Database\DatabaseConnection;
use Models\Adhesion\Adhesion;

class AdhesionRepository
{
  public DatabaseConnection $connection;

  function getAllAdhesions(): array
  {
    $statement = $this->connection->getConnection()->query('SELECT * FROM adhesion');

    $adhesions = [];
    while ($row = $statement->fetch()) {
      $adhesion = new Adhesion();
      $adhesion->date_debut = $row['date_debut'];
      $adhesion->date_fin = $row['date_fin'];
      $adhesion->tarif = $row['tarif'];
      $adhesion->id_adherent = $row['id_adherent'];

      $adhesions[] = $adhesion;
    }
    return $adhesions;
  }
} -->


// function createAdhesion($date_debut, $date_fin, $tarif, $id_adherent)
// {
//   $pdo = connect();
//   $stmt = $pdo->prepare('INSERT INTO adhesion(id_adhesion, date_debut, date_fin, tarif, id_adherent) VALUES(?,?,?,?,?');
//   $affectedLines = $stmt->execute([$date_debut, $date_fin, $tarif, $id_adherent]);
//   return ($affectedLines > 0);
// }
