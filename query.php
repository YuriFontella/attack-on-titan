<?php

include('connection.php');

class Query
{
  
  function search() {
    $item = $_POST['item'];

    $connection =  Connection::getInstance()->getConnection();
    $result = $connection->query("SELECT item, description, value FROM products WHERE item LIKE '%$item%'");

    return $result;
  }
}
