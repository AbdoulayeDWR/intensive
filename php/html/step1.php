<?php
session_start();

// Handle form submission and store user choices in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['length'] = $_POST['length'];
    $_SESSION['model'] = $_POST['model'];
    $_SESSION['price'] = $_POST['price'];

    header('Location: step2.php'); // Redirect to the next step
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnalisez votre bijou - Étape 1</title>
    <link rel="stylesheet" href="../css/step1.css">
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
                    <img src="../img/chain.png" alt="Sample Chain">
                </div>
                <div class="step-right">
                    <h2>Étape 1/3</h2>
                    <p>Sélectionnez la longueur et le modèle de votre chaîne</p>
                    
                    <form method="post" action="step1.php">
                        <div class="length-selection">
                            <h3>Longueur</h3>
                            <label>
                                <input type="radio" name="length" value="40 cm" required> 40 cm
                            </label>
                            <label>
                                <input type="radio" name="length" value="60 cm" required> 60 cm
                            </label>
                        </div>

                        <div class="model-selection">
                            <h3>Modèle de chaîne</h3>
                            <label>
                                <input type="radio" name="model" value="Chaîne Élégance" data-price="100" required>
                                <div class="model-option">
                                    <img src="../img/chain.png" alt="chain en or simple" class="model-image"></img>
                                    <p>Chaîne Élégance</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="model" value="Chaîne Élégance" data-price="100" required>
                                <div class="model-option">
                                    <img src="../img/chain.png" alt="chain en or simple" class="model-image"></img>
                                    <p>Chaîne Élégance</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="model" value="Chaîne Prestige" data-price="310" required>
                                <div class="model-option">
                                    <img src="../img/chain.png" alt="chain en or simple" class="model-image"></img>
                                    <p>Chaîne Prestige</p>
                                    <p>310€</p>
                                </div>
                            </label>
                        </div>

                        <input type="hidden" name="price" id="selected-price" value="">

                        <p id="selected-chain">Chaîne sélectionnée: (Chaîne name) 100€</p>
                        <button type="submit" class="next-button">Choisir mes pendentifs</button>
                    </form>
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

    <script>
        document.querySelectorAll('input[name="model"]').forEach(item => {
            item.addEventListener('change', event => {
                const selectedModel = event.target.value;
                const selectedPrice = event.target.getAttribute('data-price');
                document.getElementById('selected-chain').textContent = `Chaîne sélectionnée: ${selectedModel} ${selectedPrice}€`;
                document.getElementById('selected-price').value = selectedPrice;
            });
        });
    </script>
</body>
</html>
