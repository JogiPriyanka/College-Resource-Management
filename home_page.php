<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      tr:hover{
        color:red;
      }
    <?php include 'main.css'; ?>
    </style>
</head>
<body>
<h1><b>Details Of Repairs</b></h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>C_code</th>
          <th>System</th>
          <th>Maintainance</th>
          <th>Room</th>
          <th>Date of complaint</th>
          <th>Status</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "infradb";
        $connection = new mysqli($servername, $username, $password, $database);

        if ($connection->connect_error) {
            die("Sorry we failed to connect: " . $connection->connect_error);
        }
        
        $sql = "SELECT * FROM `complaint`
        ORDER BY `c_code` DESC";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query: ".$connection->error);
        }
        

        
        while($row = $result->fetch_assoc()){
            echo "<tr>
            <td>".$row['c_code']."</td>
            <td>".$row['system']."</td>
            <td>".$row['maint']."</td>
            <td>".$row['room']."</td>
            <td>".$row['date']."</td>
            <td>".$row['status']."</td>

            
            </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <script>
    <?php include 'main.js'; ?>
  </script>
</body>
</html>
