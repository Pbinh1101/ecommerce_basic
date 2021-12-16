<?php 

include '../../dbconnect.php';

$stmt = $pdo->prepare('SELECT * from brands');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

// while($row = $stmt->fetch()) {
//     echo $row['id'] , '\n';
//     echo $row['name'] , '\n';
//     echo $row['desc'] , '\n';
//    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class ="table">
          <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <?php  while($row = $stmt->fetch()) {?>
              <tr>
                <th> <?php ?></th>
                <td> <?php echo $row['name']?></td>
                <td> <?php echo $row['desc']?></td>
              </tr>
            <?php }?> 
            </tbody>
    </table>
</body>
</html>
