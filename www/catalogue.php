<?php
$products = [
    ['name' => 'Tondeuse à gazon électrique', 'price' => 199.99, 'picture' => 'tondeuse-electrique.jpg'],
    ['name' => 'Taille-haie thermique', 'price' => 299.99, 'picture' => 'taille-haie-electrique.jpg'],
    ['name' => 'Débroussailleuse à essence', 'price' => 249.99, 'picture' => 'debroussailleuse-essence.jpg'],
    ['name' => 'Tracteur-tondeuse', 'price' => 1999.99, 'picture' => 'tracteur-tondeuse.jpg'],
    ['name' => 'Souffleur de feuilles à batterie', 'price' => 149.99, 'picture' => 'souffleur-batterie.jpg']
];
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ÉjardinAuthentification</title>
    <link rel="stylesheet" type="text/css" href="design/default.css">
    <link rel="icon" type="image/pngn" href="img/favicon.png">
</head>

<body>

    <?php include('src/header.php'); ?>

    <section>
        <div style="display: flex; flex-wrap: nowrap;">
            <?php foreach ($products as $product) : ?>
                <div class="product-card" style="display: flex; flex-wrap: nowrap;">
                    <div class="product" style="flex: 0 0 auto; margin: 10px; text-align: center;">
                        <img src="img/<?= htmlspecialchars($product['picture']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100px; height: 100px;">
                        <h2 class="title_product"><?= htmlspecialchars($product['name']) ?></h2>
                        <p><?= number_format($product['price'], 2) ?> €</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include('src/footer.php'); ?>
</body>

</html>