<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class= "container" my-5>
        <h2>My Products</h2>
        <a  href="/MyProduct_1st/Create.php" role="button">Add Products</a>
    <br>
    <table class="table">
             <thead>
              <tr>
                <th> Id</th>
                <th> Name</th>
                <th> Description</th>
                <th> Price</th>
                <th> Quantity</th>
                <th> Created_at</th>
                <th> Updated_at</th>
              </tr>
             </thead>
             <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "myproduct_1st";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed: " . $connection->connect_error);
                }
                $sql = "SELECT * FROM products";
                $result = $connection->query($sql);

                if(! $result) {
                    die("Invalid query: ". $connection->error);                   
                }

                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                    <td>$row[ID]</td>
                    <td>$row[Name]</td>
                    <td>$row[Description]</td>
                    <td>$row[Price]</td>
                    <td>$row[Quantity]</td>
                    <td>$row[Created_at]</td>
                    <td>$row[Updated_at]</td>
                    <td>
                        <a href='/MyProduct_1st/Edit.php?ID=$row[ID]'> Edit</a>
                        <a href='/MyProduct_1st/Delete.php?ID=$row[ID]'> Delete</a>
                    </td>
                </tr>

                    ";
                }
                
                ?>

             </tbody>
</table>
    </div>
</body>
</html>