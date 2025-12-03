<!-- David, John Paul S. WD-201 -->
<?php
$storeNameCC = "Sweet Bliss Cupcake Shop";
$cupcakes = [
    [
        "name"  => "Chocolate Dream",
        "price" => 40,
        "num_items" => 15,
        "desc"  => "A rich chocolate cupcake topped with creamy dark chocolate frosting.",
        "img"   => "choc_dream.jpg"
    ],
    [
        "name"  => "Vanilla Swirl",
        "price" => 35,
        "num_items" => 0,
        "desc"  => "A fluffy vanilla cupcake with a smooth buttercream swirl.",
        "img"   => "vani_swirl.jpg"
    ],
    [
        "name"  => "Strawberry Burst",
        "price" => 37,
        "num_items" => 20,
        "desc"  => "A fruity strawberry-infused cupcake with fresh strawberry icing.",
        "img"   => "strawb_burst.jpg"
    ],
    [
        "name"  => "Cookies & Cream",
        "price" => 39,
        "num_items" => 0,
        "desc"  => "A crushed-cookie cupcake blended with vanilla cream frosting.",
        "img"   => "cookies&cream.jpg"
    ],
    [ //3 new flavors
        "name"  => "Red Velvet Bliss",
        "price" => 38,
        "num_items" => 12,
        "desc"  => "A moist red velvet cupcake topped with smooth cream cheese frosting.",
        "img"   => "rv_bliss.jpg"
    ],
    [
        "name"  => "Lemon Delight",
        "price" => 36,
        "num_items" => 16,
        "desc"  => "A lemon cupcake with refreshing citrus glaze and zest.",
        "img"   => "lemon_del.jpg"
    ],
    [
        "name"  => "Caramel Crunch",
        "price" => 39,
        "num_items" => 14,
        "desc"  => "A cupcake drizzled with caramel and crunchy toffee bits.",
        "img"   => "c_crunch.jpg"
    ]
];
$totalnum_items =
      $cupcakes[0]["num_items"]
    + $cupcakes[1]["num_items"]
    + $cupcakes[2]["num_items"]
    + $cupcakes[3]["num_items"]
    // include the 3 new flavors
    + $cupcakes[4]["num_items"]
    + $cupcakes[5]["num_items"]
    + $cupcakes[6]["num_items"];;
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
<?php include 'header.php' ?>
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
    <!-- used foreach for all cupcakes instead of individual calling -->
    <?php foreach ($cupcakes as $cc): ?>
    <tr>
        <td><img src="<?= $cc['img'] ?>" class="cupcake-img" alt=""></td>
        <td><?= $cc['name'] ?></td>
        <td><?= $cc['desc'] ?></td>
        <td>₱ <?= $cc['price'] ?></td>
        <td><?= $cc['num_items'] ?></td>
        <td>
            <?php 
            // if else statement for product availability
            if ($cc["num_items"] > 0) {
                echo "In stock!";
            } else {
                echo "Out of stock :(";
            }
            ?>
    </tr>
    <?php endforeach; ?>
</table>
<div class="footer">
    <?= "Total cupcakes available today: " . $totalnum_items ?>
</div>
    <!-- used include for footer -->
<div class="creds">
<?php include "footer.php"; ?>
</div>
</body>
</html>



