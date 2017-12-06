<?php 

include('query.php');

$query = Query::search();

?>


<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf8_pt">
      <title>SQL Injection</title>
    </head>
    <body>

      <form method="post" action="index.php">
        <label>Faça uma busca pelo item desejado:</label>
        <input type="text" name="item" style="width: 70%" autocomplete="off">

        <button type="submit">Buscar</button>
      </form>

      <hr>

      <table style="width: 400px">
        <thead>
          <tr align="left">
            <th>Item</th>
            <th>Descrição</th>
            <th>Valor</th>
          </tr>
        </thead>

        <tbody>
          <?php while($row = mysqli_fetch_assoc($query)): ?>
          <tr>
            <td><?php echo $row['item'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><?php echo $row['value'] ?></td>
          </tr>
          <?php endwhile ?>
        </tbody>
      </table>

    </body>
  </html>      