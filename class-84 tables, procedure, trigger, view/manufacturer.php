<?php
require_once('db.php');

if (isset($_POST['add_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    // echo $name."<br>".$address;
    $db->query("call createManufacturer('$name', '$address')");
}

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $db->query("delete from manufactures where id = $id");
}

$result = $db->query("select * from manufactures order by id desc");
$rows = $result->fetch_all(MYSQLI_ASSOC);
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

    <h1>Add New Manufacturer</h1>
    <form method="post">
        Name: <br>
        <input type="text" name="name"><br><br>
        Address: <br>
        <input type="text" name="address"><br><br>
        <input type="submit" name="add_mfg" value="Add Manufacturer"><br><br>
    </form>

    <h1>Manufacturers List</h1>
    <table width="500" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php foreach($rows as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['name']; ?></td>
            <td><?= $item['address']; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="delete_id" value="<?= $item['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
</body>
</html>