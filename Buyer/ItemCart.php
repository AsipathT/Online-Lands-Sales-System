<?php

require_once './DB/db.php';

$sql = "SELECT * FROM `cartitems`";
$result = $conn->query($sql);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert | Export html Table to CSV & EXCEL File</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <nav class="nav">
        <h2>
            Land Sell
        </h2>
        <ul>
            <li><a href="./cart.php">Back</a></li>
        </ul>
    </nav>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Customer Orders</h1> 

        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Perch price </th>
                        <th> Num Of Perchs </th>
                        <th> Total </th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <img src="<?php echo $row['img']; ?>" alt=""><br> <?php echo $row['landName']; ?> </td>
                        <td><?php echo $row['perchPrice']; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo 'Rs' . $row['total'] . '/='; ?></td>
                        <td>
                                <form action="./DB/delete.php" method="post">
                                        <input type="hidden" name="mid" value="<?php echo $row['id'] ;?>">
                                        <input type="submit" value="Delete" name="delete" style="padding: 5px 10px; background-color: #EC5800;border:none;border-radius: 3px;color:#fff;">
                                    </form>
                                </td>
                                <td>
                                <form action="./DB/update.php" method="post">
                                        <input type="hidden" name="mid" value="<?php echo $row['id'] ;?>">
                                        <input type="hidden" name="price" value="<?php echo $row['perchPrice'] ;?>">
                                        <input type="number" min="1" max="20" name="qty" value="<?php echo $row['qty']; ?>" style="width: 50px;padding: 10px;">
                                        <input type="submit" value="Update" name="update" style="padding: 5px 10px; background-color: green;border:none;border-radius: 3px;color:#fff;">
                                    </form>
                                </td>
                    </tr>
                    <?php }?>>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>