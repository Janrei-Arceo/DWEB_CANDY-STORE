
<?php

$name = 'Janrei';
$price = 2;
$name = 'Arceo';

$nutrition = [
    'fat' => 36,
    'sugar' => 60,
    'salt' => 3.5,
    'fiber' => 2.1,
    'protein' => 7.3,
];

$best_seller = [
    'Chocolate', 'Mints', 'Fudge', 'Licorice',
    'Bubble gum', 'Toffee', 'Jelly beans'
];

$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120],
    ['name' => 'Mints', 'price' => 3, 'stock' => 66],
    ['name' => 'Fudge', 'price' => 4, 'stock' => 97],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 0],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>The Candy Store</h1>
<h2>Welcome <?php echo $name; ?></h2>
<p>The cost of your candy is $<?php echo $price; ?> per pack.</p>

<h2>Nutrition (per 100g)</h2>
<?php
foreach ($nutrition as $nutrient => $value) {
    echo "<p>$nutrient: $value%</p>";
}
?>

<h2>Best Sellers</h2>
<ul>
<?php
foreach ($best_seller as $candy) {
    echo "<li>$candy</li>";
}
?>
</ul>

<h2>Offers</h2>
<?php
foreach ($offers as $candy) {
    echo "<p>{$candy['name']} - \${$candy['price']}</p>";

    if ($candy['stock'] > 0) {
        echo "<p>In stock</p>";
    } else {
        echo "<p>Sold out</p>";
    }
}
?>

<h2>Stock Status</h2>
<?php
$stock = 10;

if ($stock > 50) {
    echo "High stock";
} elseif ($stock > 0) {
    echo "Limited stock";
} else {
    echo "Out of stock";
}
?>

<h2>Daily Offer</h2>
<?php
$day = 'Wednesday';

switch ($day) {
    case 'Wednesday':
        echo "Special Wednesday offer!";
        break;
    default:
        echo "Check out our candy offers!";
}
?>

<h2>While Loop</h2>
<?php
$counter = 1;

while ($counter <= 5) {
    echo "<p>Pack $counter</p>";
    $counter++;
}
?>

<h2>Do While Loop</h2>
<?php
$packs = 5;

do {
    echo "<p>Remaining packs: $packs</p>";
    $packs--;
} while ($packs > 0);
?>

<h2>For Loop</h2>
<?php
for ($counter = 1; $counter <= 5; $counter++) {
    echo "<p>Pack $counter - $" . ($price * $counter) . "</p>";
}
?>

</body>
</html>
