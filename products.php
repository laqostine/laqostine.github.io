<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chemical Products</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        padding: 20px;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 300px;
        margin: 10px;
    }
    .card img {
        width: 100%;
    }
    .container .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    .card-content {
        padding: 16px;
        text-align: center;
    }
</style>
</head>
<body>

<div class="container">
    <?php
    // Array of products
    $products = [
        [
            'name' => 'Urea 46%',
            'description' => 'The most concentrated nitrogen fertilizer.',
            'image' => 'img/1.jpg'
        ],
        [
            'name' => 'Potassium Chloride (KCl)',
            'description' => 'The most concentrated nitrogen fertilizer.',
            'image' => 'img/2.jpg'
        ],
        [
            'name' => 'Di-Ammonium Phosphate (DAP)',
            'description' => 'The most concentrated nitrogen fertilizer.',
            'image' => 'dap.png'
        ],
        [
            'name' => 'Ammonium Nitrate (AN)',
            'description' => 'The most concentrated nitrogen fertilizer.',
            'image' => 'an.png'
        ]
    ];

    // Loop through each product and display a card
    foreach ($products as $product) {
        echo '<div class="card">';
        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
        echo '<div class="card-content">';
        echo '<h4>' . $product['name'] . '</h4>';
        echo '<p>' . $product['description'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
