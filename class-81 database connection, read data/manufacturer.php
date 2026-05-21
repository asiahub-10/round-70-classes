<?php
require_once "db-config.php";

$result = $db->query("select * from manufactures");
if ($result) {
    $mfg = $result->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($mfg);
    // echo "</pre>";
} else {
    echo $db->error;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>

<body>
    <nav>
        <a href="manufacturer.php">Manufacturer</a> |
        <a href="product.php">Product</a>
    </nav>

    <div style="display: flex; gap: 100px;">
        <div>
            <h3>Add New Manufacturer</h3>
            <form method="POST">
                <label for="name">Name</label><br>
                <input type="text" name="name">
                <br><br>
                <label for="address">Address</label><br>
                <textarea name="address"></textarea>
                <br><br>
                <input type="checkbox" name="active" id="active">
                <label for="active">Is active</label>
                <br><br>
                <button type="submit" name="add_mfg">Save</button>
            </form>
        </div>
        <div>
            <h3>Manufacturers List</h3>
            <table border="1" width="100%" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($mfg)):
                        foreach ($mfg as $item):
                            $status = $item['is_active'] ? "Active" : "Inactive";
                    ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['name']; ?></td>
                                <td><?= $item['address']; ?></td>
                                <td><?= $status; ?></td>
                                <td>

                                </td>
                            </tr>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </tbody>

            </table>
        </div>
    </div>


</body>

</html>