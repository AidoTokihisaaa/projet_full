<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
    <style>
        .user-icon-link {
            text-decoration: none;
            color: black;
            margin-right: 10px;
        }
        
    </style>
</head>
<body>

<header>
    <div class="menu">
        <div class="logo">
            <img src="./public/images/30082289_7636941-removebg-preview.png" alt="Logo">
        </div>
        <div class="menu-icons">
            <?php
                session_start();
                if(isset($_SESSION['user'])) {
                    echo '<a href="./process/logout.php" class="user-icon-link">
                            <i class="fas fa-power-off"></i>
                          </a>';
                } else {
                    echo '<a href="./views/login.php" class="user-icon-link">
                            <i class="fas fa-user customer-icon"></i>
                          </a>';
                }
            ?>
<<<<<<< HEAD
            <a href="../FullStack/contact.php" class="contact-button">Contactez-nous</a>
=======
            <a class="contact-button">Contactez-nous</a>
>>>>>>> 4a2441e2e5ad582b1a9b809cc0031078b01e8fc7
            <button class="cart-button">
                <i class="fas fa-shopping-cart"></i>
            </button>
        </div>
    </div>
</header>

<section class="products-section">
    <div class="product-card">
        <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
            <h1>BURRITOS</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
    <div class="product-card">
        <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>TACOS</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>FAJITAS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="./views/product/index.php" class="product-button">Voir Produit</a>
<<<<<<< HEAD
=======
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>SNACK & NACHOS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>SNACK & NACHOS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
>>>>>>> 4a2441e2e5ad582b1a9b809cc0031078b01e8fc7
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>SNACK & NACHOS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>BURITOS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
    <div class="product-card">
    <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 4">
        <div class="product-info">
        <h1>BOISSONS</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur error illum assumenda? Sunt, animi voluptate itaque est cupiditate odio repellendus explicabo, nobis, nisi at molestias labore adipisci eos saepe doloribus.
            Ratione, error earum aspernatur explicabo et, cumque ex alias, sed suscipit mollitia obcaecati dolorem excepturi est iusto dolore animi reiciendis? Nisi, quia! Voluptates exercitationem amet, explicabo minima ab quam ut?</p>
            <a href="#" class="product-button">Voir Produit</a>
        </div>
    </div>
</section>
</header>
<script src="https://kit.fontawesome.com/votrekitcode.js" crossorigin="anonymous"></script>
</body>
</html>

