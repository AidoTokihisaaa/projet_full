<html>
<head>
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="../public/images/logo.png" alt="Logo de l'entreprise">
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../index.php?page=products">Produits</a></li>
                <li><a href="../index.php?page=about">À propos</a></li>
                <li><a href="../index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <div id="cart">
            <a href="../index.php?page=cart">Panier</a>
        </div>
    </header>

    <section id="featured-products">
        <h2>Produits en vedette</h2>
        <div class="product-card">
            <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 1">
            <h3>Nom du Produit 1</h3>
            <p>Description courte du Produit 1.</p>
            <a href="../index.php?page=product&action=show&id=1">Voir les détails</a>
        </div>

        <div class="product-card">
            <img src="./public/images/hybrid-storytellers-QSHsVUTLIRU-unsplash.jpg" alt="Produit 2">
            <h3>Nom du Produit 2</h3>
            <p>Description courte du Produit 2.</p>
            <a href="../index.php?page=product&action=show&id=2">Voir les détails</a>
        </div>
    </section>

    <footer>
        <p>&copy;</p>
    </footer>
</body>
</html>
