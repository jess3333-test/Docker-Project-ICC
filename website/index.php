<!DOCTYPE html>
<html>
  <head>
    <title>ProjetDocker ICC</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <table>
      <tr>
        <th>Nom</th>
        <th>Age</th>
        <th>Email</th>
      </tr>
    <?php
      $conn = mysqli_connect('db', 'userdb', 'userdb', 'dockerProjet', 3306);
      mysqli_set_charset($conn, "utf8");


      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT nom, age, email FROM Personne";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["nom"]. "</td><td>" . $row["age"] . "</td><td>". $row["email"]. "</td></tr>";
        }
        echo "</table>";
      }
      else { 
        echo "0 results"; 
      }
      $conn->close();
    ?>
    </table>

<div class="container">
  <div class="container-left">
    <h4>Ajout données dans la table</h4>
    <br>
    <p>
        <form method="post" action="process.php">
    Nom:<br>
    <input type="text" name="nom" required="required">
    <br>
    Age:<br>
    <input type="number" name="age" required="required">
    <br>
    Email:<br>
    <input type="email" name="email" required="required">
    <br><br>
    <input type="submit" name="save" value="Submit">
  </form>
    </p>
  </div>
  <div class="container-right">
    <h4>Supprimer une ou plusieurs lignes en fonction du nom</h4>
    <br>
    <p>
        <form method="post" action="delete.php">
    Nom:<br>
    <input type="text" name="nom" required="required">
    <br><br>

    <input type="submit" name="save" value="Submit">
  </form>
    </p>
  </div>
</div>


</body>
</html>
