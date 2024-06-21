<?php
session_start();

// Vérifier si les éléments sont définis dans la session
if (!isset($_SESSION['element1']) || !isset($_SESSION['element2']) || !isset($_SESSION['element3'])) {
    header('Location: index.php'); // Rediriger si les données ne sont pas présentes
    exit();
}

// Charger les données à partir de data.json
$str = file_get_contents('../json/bar.json');
$data = json_decode($str, true);

// Récupérer les sélections depuis la session
$element1Name = $_SESSION['element1'];
$element2Name = $_SESSION['element2'];
$element3Name = $_SESSION['element3'];

// Fonction pour trouver les détails (prix) d'un élément par son nom
function findDetailsByName($element, $name, $data) {
    foreach ($data[$element] as $option) {
        if ($option['name'] === $name) {
            return $option;
        }
    }
    return null;
}

// Construire un tableau des sélections pour l'affichage
$selections = [
    [
        'name' => $element1Name,
        'details' => findDetailsByName('element1', $element1Name, $data),
    ],
    [
        'name' => $element2Name,
        'details' => findDetailsByName('element2', $element2Name, $data),
    ],
    [
        'name' => $element3Name,
        'details' => findDetailsByName('element3', $element3Name, $data),
    ],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-image {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Récapitulatif de votre personnalisation</h1>
        
        <?php foreach ($selections as $index => $selection) : ?>
            <div class="mb-5">
                <h2 class="text-center">Étape <?php echo $index + 1; ?></h2>
                <div class="row justify-content-center">
                    <?php foreach ($selection as $item) : ?>
                        <div class="col-md-4 text-center">
                            <img src="<?php echo htmlspecialchars($item['img']); ?>" 
                                 alt="<?php echo htmlspecialchars($item['name']); ?>" 
                                 class="img-fluid product-image">
                            <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                            <p><?php echo htmlspecialchars($item['price']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Recommencer</a>
        </div>
    </div>
</body>
</html>
