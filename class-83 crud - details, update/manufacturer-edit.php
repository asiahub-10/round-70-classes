<?php
require_once "db-config.php"; 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("select * from manufactures where id = $id");
    if($result) {
        $mfg = $result->fetch_assoc();
    }
}
if(isset($_POST['update_mfg'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $active = isset($_POST['active']) ? 1 : 0;
    $result = $db->query("update manufactures set name = '$name', address = '$address', is_active = $active where id = $id");
    if($result) {
        header("Location: manufacturer.php");
    }else{
        echo $db->error;
    }
}
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
        <a href="manufacturer.php">Manufacturer</a> |
        <a href="product.php">Product</a>
    </nav>

    <h3>Manufacturer Edit</h3>
    <?php
    if(isset($mfg)):
    ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $mfg['id']; ?>">
        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?= $mfg['name']; ?>"><br>
        <br><br>
        <label for="address">Address</label><br>
        <textarea name="address"><?= $mfg['address']; ?></textarea>
        <br><br>
        <input type="checkbox" name="active" id="active" <?= $mfg['is_active'] ? "checked" : ""; ?>>
        <label for="active">Is active</label>
        <br><br>
        <button type="submit" name="update_mfg">Update</button>
    </form>
    <?php
    else:
        echo "Data not found";
    endif;
    ?>
</body>
</html>