<?php
session_start();

// Ensure the user has made selections in the previous step
if (!isset($_SESSION['length']) || !isset($_SESSION['model']) || !isset($_SESSION['price'])) {
    header('Location: step1.php');
    exit();
}

// Handle form submission and store user choices in session
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['pendants'] = $_POST['pendants'] ?? [];
    header('Location: step3.php'); // Redirect to the next step
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnalisez votre bijou - Étape 2</title>
    <link rel="stylesheet" href="../css/step2.css">
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
                    <h2>Étape 2/3</h2>
                    <p>Sélectionnez jusqu'à 4 pendentifs</p>

                    <form method="post" action="step2.php">
                        <div class="pendant-selection">
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 1" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant1.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 2" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant2.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 3" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant3.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 4" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant4.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 5" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant5.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                            <label>
                                <input type="checkbox" name="pendants[]" value="Pendentif 6" data-price="100">
                                <div class="pendant-option">
                                    <img src="../img/pendant6.png" alt="pendantif" class="pendant-image"></img>
                                    <p>Nom chaîne</p>
                                    <p>100€</p>
                                </div>
                            </label>
                        </div>

                        <p id="selected-pendants">(0) Pendentifs sélectionnés 0€</p>
                        <button type="submit" class="next-button">Ajouter au panier</button>
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
        document.querySelectorAll('input[name="pendants[]"]').forEach(item => {
            item.addEventListener('change', updateSelectedPendants);
        });

        function updateSelectedPendants() {
            const selected = document.querySelectorAll('input[name="pendants[]"]:checked');
            const count = selected.length;
            let totalPrice = 0;

            selected.forEach(item => {
                totalPrice += parseInt(item.getAttribute('data-price'));
            });

            document.getElementById('selected-pendants').textContent = `(${count}) Pendentifs sélectionnés ${totalPrice}€`;
        }
    </script>
</body>
</html>
