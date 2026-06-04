<?php
require_once('db.php');
$sql = "
select p.*, m.name mfg
from products as p, manufactures as m 
where p.manufacture_id = m.id
";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($rows);
// echo "</pre>";
$view_result = $db->query("select * from vw_product_list");
$view_rows = $view_result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="manufacturer.php">Manufacturers</a> | 
        <a href="product.php">Products</a>
    </nav>
    <h1>View Products more than TK.5,000</h1>
    <table width="500" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mfg</th>
            <th>Price</th>
        </tr>
        <?php foreach($view_rows as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['name']; ?></td>
            <td><?= $item['mfg']; ?></td>
            <td><?= $item['price']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br><br>

    <h1>Products List</h1>
    <table width="500" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mfg</th>
            <th>Price</th>
        </tr>
        <?php foreach($rows as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['name']; ?></td>
            <td><?= $item['mfg']; ?></td>
            <td><?= $item['price']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>