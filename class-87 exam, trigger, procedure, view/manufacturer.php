<?php
require_once('db.php');
if(isset($_POST['contact_no'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addManufacturer('$name', '$address', '$contact_no')");
}
if(isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $db->query("delete from manufacturer where id = $id");
}

$result = $db->query("SELECT * FROM manufacturer");
$rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Add Manufacturer</h4>
    <form action="" method="POST">
        Name:
        <input type="text" name="name" placeholder="name"><br>
        Address:
        <input type="text" name="address" placeholder="address"><br>
        Contact:
        <input type="text" name="contact_no" placeholder="contact_no"><br>
        <button type="submit">Add</button>
    </form>

    <h4>Manufacturer list</h4>
    <table border="1" width="500">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
        <?php foreach($rows as $item): ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['address']; ?></td>
            <td><?php echo $item['contact_no']; ?></td>
            <td>
                <form action="" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $item['id']; ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>