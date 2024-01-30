<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../public/css/product.css">
    <title>Produit Personnalisable</title>
</head>
<body>
<header>
    <div class="menu">
        <div class="logo">
            <img src="../../public/images/30082289_7636941-removebg-preview.png" alt="Logo">
        </div>
        <div class="menu-icons">
            <?php
                session_start();
                if(isset($_SESSION['user'])) {
                    echo '<a href="../../process/logout.php" class="user-icon-link">
                            <i class="fas fa-power-off"></i>
                          </a>';
                } else {
                    echo '<a href="../../views/login.php" class="user-icon-link">
                            <i class="fas fa-user customer-icon"></i>
                          </a>';
                }
            ?>
            <button class="cart-button">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </div>
</header>
<div class="product-card">
    <img src="../../public/images/burrito-aux-frites-legumes.jpg" alt="Burrito" class="product-image">
    <div class="product-info">
        <h2 class="product-title">Burrito</h2>
        <p class="product-description">Un délicieux burrito fait avec des ingrédients frais.</p>
        <p class="product-price">$10.99</p>
        <div class="quantity-control">
            <button class="btn btn-minus">-</button>
            <span class="quantity">1</span>
            <button class="btn btn-plus">+</button>
        </div>
        <div class="customization-options">
            <label for="protein">Choisir une protéine :</label>
            <select id="protein" name="protein">
                <option value="chicken">Poulet</option>
                <option value="beef">Boeuf</option>
                <option value="tofu">Tofu</option>
            </select>
            <label for="toppings">Choisir des garnitures :</label>
            <input type="checkbox" id="salsa" name="salsa" value="salsa">
            <label for="salsa">Salsa</label>
            <input type="checkbox" id="guacamole" name="guacamole" value="guacamole">
            <label for="guacamole">Guacamole</label>
            <label for="side-dish">Choisir un accompagnement :</label>
            <select id="side-dish" name="side-dish">
                <option value="frites">Frites</option>
                <option value="salade">Salade</option>
                <option value="riz">Riz</option>
                <option value="haricots">Haricots</option>
                <option value="légumes grillés">Légumes grillés</option>
            </select>
        </div>
        <button class="btn btn-add-to-cart">Ajouter au panier</button>
    </div>
</div>

    <div class="product-card">
        <img src="../../public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Nom du produit" class="product-image">
        <div class="product-info">
            <h2 class="product-title">Nom du Produit</h2>
            <p class="product-description">Description brève du produit.</p>
            <p class="product-price">Prix: $XX.XX</p>
            <div class="quantity-control">
                <button class="btn btn-minus">-</button>
                <span class="quantity">1</span>
                <button class="btn btn-plus">+</button>
            </div>
            <button class="btn btn-add-to-cart">Ajouter au panier</button>
        </div>
    </div>
    <div class="product-card">
        <img src="../../public/images/shawarma-vue-laterale-pommes-terre-frites-dans-batterie-cuisine-bord.jpg" alt="Nom du produit" class="product-image">
        <div class="product-info">
            <h2 class="product-title">Nom du Produit</h2>
            <p class="product-description">Description brève du produit.</p>
            <p class="product-price">Prix: $XX.XX</p>
            <div class="quantity-control">
                <button class="btn btn-minus">-</button>
                <span class="quantity">1</span>
                <button class="btn btn-plus">+</button>
            </div>
            <button class="btn btn-add-to-cart">Ajouter au panier</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
