<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XXIX Bijoux</title>
    <style>
        body{
            background: var(--Blanc, #FBFBF4);
        }
        nav{
            display: flex;
            justify-content:space-between;
            align-items: center;
            margin-left: 1%;
            margin-right: 1%;
        }
        nav img{
            width: 124px;
            height: 80px;
            flex-shrink: 0;
        }
        #bar{
            width: 90%;
            height: 270px;
            background: url('../img/img-bar.png') no-repeat center;
            margin: 3% 3% 0% 5%;
        }
        #descBar div{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: absolute;
            left: 150px;
            top: 150px;
        }
        #descBar a{
            display: flex;
            padding: 10px 15px;
            justify-content: center;
            align-items: center;
            gap: 15px;
            position: absolute;
            right: 175px;
            bottom: 375px;
            border-radius: 5px;
            background: #000;
            text-decoration: none;
            color: #FFF;
            font-family: Raleway;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 40px; /* 200% */
        }
        main { 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            margin: 0 5%;
        }
        main h2{
            color: #000;
            font-family: "Gallery Modern";
            font-size: 50px;
            font-style: normal;
            font-weight: 200;
            line-height: 95px; /* 98.958% */
            margin-top: 1%;
            margin-bottom: 0;
        }
        #filtre{
            display: flex;
            align-items: center;
            gap: 30px;
        }
        #filtre div{
            display: flex;
            align-items: center;
        }
        #filtre img{
            width: 20px;
            height: 20px;

        }
        .produit {
            width: 100%;
            margin: 20px;
            padding: 10px;
        }
        .produit img{
            width: 360px;
            height: 360px;
        }
        /* .produit h2{
            color: #000;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: 30px; 
            width: 50%;
        }
        .produit p{
            display: inline;
            color: var(--Gold, #DECEA2);
            font-family: Raleway;
            font-size: 32px;
            font-style: normal;
            font-weight: 500;
            line-height: 30px; 
            width: 50%;
        } */
        .text{
            display: flex;
            width: 365px;
            align-items: center;
            justify-content: space-between;
            align-content: center;
            gap: 0px 126px;
            flex-wrap: wrap;
        }
        .text h2{
            color: #000;
            font-family: Raleway;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: 30px; /* 125% */
        }
        .text p{
            color: var(--Gold, #DECEA2);
            font-family: Raleway;
            font-size: 32px;
            font-style: normal;
            font-weight: 500;
            line-height: 30px; /* 93.75% */
        }
        .text span{
            color: #000;
            font-family: Raleway;
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: 30px; /* 187.5% */
        }
        #gallery{
            display: grid;
            grid-template-columns: repeat(3, 1fr);            
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }

        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 60px; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }

        .modal-content {
            display: flex;
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            width: 80%;
        }

        .modal-content img {
            width: 50%;
            margin: 0 20px; /* Ajouter un peu d'espace entre l'image et la description */
        }

        .modal-content .modal-text {
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .footer {
    display: flex;
    justify-content: space-between;
    padding: 50px;
    background: #FBFBF4;
}

.footer-left,
.footer-center,
.footer-right {
    width: 30%;
}

.footer-left img {
    width: 50px;
    height: auto;
}

.footer-left p {
    margin-top: 20px;
    font-size: 14px;
    line-height: 1.5;
}

.footer-center h3,
.footer-right h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.footer-center ul {
    list-style: none;
    padding: 0;
}

.footer-center ul li {
    margin-bottom: 10px;
}

.footer-center ul li a {
    text-decoration: none;
    color: #000;
    font-size: 14px;
}

.footer-right .social-links {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.footer-right .social-links a img {
    width: 20px;
    height: auto;
}

.footer-right p {
    font-size: 14px;
    line-height: 1.5;
}
    </style>
</head>
<body>
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
<div id="bar">
    <div id="descBar">
        <div>
            <h2>Bar à Talisman</h2>
            <p>Description text</p>
        </div>
        <a href="bar.php">Personaliser</a>
    </div>
</div>
<main>
    <h2>Nos Bijoux</h2>
    <div id="filtre">
        <div>
        <img src="../img/Vector.svg" alt="">
        <p>Catègories</p>
        </div>
        <div>
        <img src="../img/Vector.svg" alt="">
        <p>Matières</p>
        </div>
        <div>
        <img src="../img/Vector.svg" alt="">
        <p>Prix</p>
        </div>
    </div>
        <?php

$str = file_get_contents('../json/data.json');
$data = json_decode($str, true); // decode the JSON into an associative array
echo "<div id='gallery'>";
for ($i = 0; $i < count($data); $i++) { 
    echo "<div class='produit' data-index='$i'>";
    echo "<img src='" . $data[$i]['img'] . "' alt='Image de " . $data[$i]['name'] . "'>";
    echo "<div class='text'>";
    echo "<h2>" . $data[$i]['name'] . "</h2>";
    echo "<p>". $data[$i]['price'] ."</p>";
    echo "<span>Description produit</span>";
    echo "</div>";
    echo "<a href='produit.html'><input type='submit' value='Détails'></a>";
    echo "</div>";
}
echo "</div>";
?>
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
        </div>
    </div>

</body>
</html>
