<!-- David, John Paul S. WD-201 -->
<?php
$storeNameCC = "Sweet Bliss Cupcake Shop";
$cupcakes = [
    [
        "name"  => "Chocolate Dream",
        "price" => 10,
        "num_items" => 15,
        "desc"  => "A rich chocolate cupcake topped with creamy dark chocolate frosting.",
        "img"   => "choc_dream.jpg"
    ],
    [
        "name"  => "Vanilla Swirl",
        "price" => 5,
        "num_items" => 0,
        "desc"  => "A fluffy vanilla cupcake with a smooth buttercream swirl.",
        "img"   => "vani_swirl.jpg"
    ],
    [
        "name"  => "Strawberry Burst",
        "price" => 7,
        "num_items" => 20,
        "desc"  => "A fruity strawberry-infused cupcake with fresh strawberry icing.",
        "img"   => "strawb_burst.jpg"
    ],
    [
        "name"  => "Cookies & Cream",
        "price" => 9,
        "num_items" => 0,
        "desc"  => "A crushed-cookie cupcake blended with vanilla cream frosting.",
        "img"   => "cookies&cream.jpg"
    ],
];
$totalnum_items =
      $cupcakes[0]["num_items"]
    + $cupcakes[1]["num_items"]
    + $cupcakes[2]["num_items"]
    + $cupcakes[3]["num_items"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $storeNameCC ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1><?= $storeNameCC ?></h1>
<h3 class="menu-header">Cupcake Menu</h3>
<table>
    <tr>
        <th>Cupcake</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Availability</th>
    </tr>
    <tr>
        <td><img src="<?= $cupcakes[0]["img"] ?>" class="cupcake-img" alt=""></td>
        <td><?= $cupcakes[0]["name"] ?></td>
        <td><?= $cupcakes[0]["desc"] ?></td>
        <td>$ <?= $cupcakes[0]["price"] ?></td>
        <td><?= $cupcakes[0]["num_items"] ?></td>
        <td>
            <?php 
            if ($cupcakes[0]["num_items"] > 0) {
                echo "In stock!";
            } else {
                echo "Out of stock :(";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td><img src="<?= $cupcakes[1]["img"] ?>" class="cupcake-img" alt=""></td>
        <td><?= $cupcakes[1]["name"] ?></td>
        <td><?= $cupcakes[1]["desc"] ?></td>
        <td>$ <?= $cupcakes[1]["price"] ?></td>
        <td><?= $cupcakes[1]["num_items"] ?></td>
        <td>
            <?php 
            if ($cupcakes[1]["num_items"] > 0) {
                echo "In stock!";
            } else {
                echo "Out of stock :(";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td><img src="<?= $cupcakes[2]["img"] ?>" class="cupcake-img" alt=""></td>
        <td><?= $cupcakes[2]["name"] ?></td>
        <td><?= $cupcakes[2]["desc"] ?></td>
        <td>$ <?= $cupcakes[2]["price"] ?></td>
        <td><?= $cupcakes[2]["num_items"] ?></td>
        <td>
            <?php 
            if ($cupcakes[2]["num_items"] > 0) {
                echo "In stock!";
            } else {
                echo "Out of stock :(";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td><img src="<?= $cupcakes[3]["img"] ?>" class="cupcake-img" alt=""></td>
        <td><?= $cupcakes[3]["name"] ?></td>
        <td><?= $cupcakes[3]["desc"] ?></td>
        <td>$ <?= $cupcakes[3]["price"] ?></td>
        <td><?= $cupcakes[3]["num_items"] ?></td>
        <td>
            <?php 
            if ($cupcakes[3]["num_items"] > 0) {
                echo "In stock!";
            } else {
                echo "Out of stock :(";
            }
            ?>
        </td>
    </tr>
</table>
<div class="footer">
    <?= "Total cupcakes available today: " . $totalnum_items ?>
</div>
<div class="creds">
    © 2025 John Paul David — Used Gemini for Image Generation
</div>
</body>
</html>


