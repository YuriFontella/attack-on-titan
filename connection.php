<?php

class Connection
{

  private $connection;

  private $host = 'localhost';
  private $username = 'root';
  private $password = '123456';

  private $db = 'injections';

  private static $instance;

  private function __construct()
  {
    $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->db) or die ("Falha na conexão!");
  }

  public static function getInstance()
  {
    if (!isset(self::$instance)) {
      self::$instance = new Connection();
    }

    return self::$instance;
  }

  public function getConnection()
  {
    return $this->connection;
  }
}
