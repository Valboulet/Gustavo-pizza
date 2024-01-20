<?php

namespace App\Table;

use Exception;
use PDO;

abstract class Table {

  protected $pdo;
  protected $table = null;
  protected $sql = null;
  protected $class = null;
  protected $param = null;
  protected $fetchMode = null;
  protected $fetchFunction = null;
  protected $exception = null;

  public function __construct(PDO $pdo)
  {
    if ($this->table === null) {
      throw new Exception('La classe ' . get_class($this) . ' n\'a pas de propriété $table');
    }
    if ($this->class === null) {
      throw new Exception('La classe ' . get_class($this) . ' n\'a pas de propriété $class');
    }
    if ($this->fetchMode === null) {
      throw new Exception('La classe ' . get_class($this) . ' n\'a pas de propriété $fetchMode');
    }
    if ($this->fetchFunction === null) {
      throw new Exception('La classe ' . get_class($this) . ' n\'a pas de propriété $fetchFunction');
    }
    $this->pdo = $pdo;
  }

  // Returns the result after executing a prepared query
  private function prepExec()
  {
    # Preparing the SQL query sent as a parameter
    $query = $this->pdo->prepare($this->sql);
    # Executing the query
    $query->execute($this->param);
    return $query;
  }

  // Returns the recovered data
  public function getDatas()
  {
    $query = $this->prepExec();

    # Defining the data recovery mode
    if ($this->fetchMode === PDO::FETCH_CLASS) {
      $query->setFetchMode($this->fetchMode, $this->class);
    } else {
      $query->setFetchMode($this->fetchMode);
    }

    # Retrieve datas
    $datas = $query->{$this->fetchFunction}();

    return $datas;
  }

  // Delete/Insert/update data

  public function manageDatas(): void
  {
    $query = self::prepExec();
    if ($query === false) {
      throw new Exception($this->exception);
    }
  }

}

