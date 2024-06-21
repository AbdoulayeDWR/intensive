<?php
session_start();

// Ensure the user has made selections in the previous steps
if (!isset($_SESSION['length']) || !isset($_SESSION['model']) || !isset($_SESSION['price']) || !isset($_SESSION['pendants'])) {
    header('Location: step1.php');
    exit();
}

$length = $_SESSION['length'];
$model = $_SESSION['model'];
$modelPrice = (int) $_SESSION['price'];  // Convert price to integer
$pendants = $_SESSION['pendants'];

$totalPrice = $modelPrice;
foreach ($pendants as $pendant) {
    $totalPrice += 100; // Assuming each pendant costs 100€
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnalisez votre bijou - Étape 3</title>
    <link rel="stylesheet" href="../css/step3.css">
</head>
<body>
    <div class="main-container">
        <nav>
            <img src="../img/logo1.png" alt="">
            <div>
                <a href="produit.php">Bijoux</a>
                <a href="">Créateurs</a>
                <a href="">L'esprit XXI X</a>
                <a href="">Connexion</a>
                <a href="">Panier</a>
            </div>
        </nav>

        <div class="content">
            <div class="customization-step">
                <div class="step-left">
                    <img src="../img/chain_sample.png" alt="Sample Chain">
                </div>
                <div class="step-right">
                    <p>Étape 3/3</p>
                    <h2>Vous avez créé votre talisman</h2>

                    <div class="recap">
                        <p><strong>Longueur:</strong> <?php echo $length; ?></p>
                        <p><strong>Modèle de chaîne:</strong> <?php echo $model; ?> (<?php echo $modelPrice; ?>€)</p>
                        <p><strong>Pendentifs sélectionnés:</strong></p>
                        <ul>
                            <?php foreach ($pendants as $pendant): ?>
                                <li><?php echo htmlspecialchars($pendant); ?> (100€)</li>
                            <?php endforeach; ?>
                        </ul>
                        <p><strong>Prix total:</strong> <?php echo $totalPrice; ?>€</p>
                    </div>

                    <div class="buttons">
                        <a href="cart.php" class="button">Ajouter au panier</a>
                        <a href="step1.php" class="button">Recommencer</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer-left">
                <img src="../img/logo1.png" alt="XXI X Logo">
                <p>En créant Vingt et une heures dix, j'ai souhaité vous faire partager mon enthousiasme pour les bijoux de créateurs et vous faire rencontrer des artisans avec des sensibilités différentes. Les bijoux que je choisis sont à la fois évidents et captivants, ce sont des objets intimistes : ils entrent en affinité avec la femme qui les porte.</p>
            </div>
            <div class="footer-center">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Bijoux</a></li>
                    <li><a href="#">Créateurs</a></li>
                    <li><a href="#">L'esprit XXI X</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="#">Panier</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <h3>Suivez-nous</h3>
                <div class="social-links">
                    <a href="#"><img src="../img/instagram_icon.png" alt="Instagram"></a>
                    <a href="#"><img src="../img/tiktok_icon.png" alt="TikTok"></a>
                    <a href="#"><img src="../img/facebook_icon.png" alt="Facebook"></a>
                </div>
                <h3>Contact</h3>
                <p>30 rue de Charonne<br>75011 Paris France<br>Appel : 09 53 23 94 40</p>
            </div>
        </footer>
    </div>
</body>
</html>
