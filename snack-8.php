<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->
<?php
$products = [
  [
    'nome' => 'computer',
    'prezzo' => '600€',
    'immagine' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvbXB1dGVyfGVufDB8fDB8fA%3D%3D&w=1000&q=80',
    'tipologia' => 'tech'
  ],
  [
    'nome' => 'cellulare',
    'prezzo' => '200€',
    'immagine' => 'http://assistenzacellularifrosinone.it/assets/img/about-us/3.png',
    'tipologia' => 'tech'
  ],
  [
    'nome' => 'jeans',
    'prezzo' => '75€',
    'immagine' => 'https://media.istockphoto.com/photos/folded-blue-jeans-on-a-white-background-modern-casual-clothing-flat-picture-id1281304280?b=1&k=20&m=1281304280&s=170667a&w=0&h=9_JNmFQX6Dq3bOA5XoBRaPQbrO4hH6TuwZXMhyGnZ_A=',
    'tipologia' => 'abbigliamento'
  ],
  [
    'nome' => 'maglia',
    'prezzo' => '20€',
    'immagine' => 'https://media.gettyimages.com/photos/plain-red-tee-shirt-isolated-on-white-background-picture-id471188329?s=612x612',
    'tipologia' => 'abbigliamento'
  ],
];

$filteredProducts = $products;
if (isset($_GET['tipologia']) !== false) {
  $tipologia = $_GET['tipologia'];
  if ($tipologia === 'all') {
    $filteredProducts = $products;
  } else {
    $filteredProducts = [];
    foreach ($products as $product) {
      if ($product['tipologia'] === $tipologia) {
        $filteredProducts[]=$product;
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="layout.css">
  <title>Document</title>
</head>
<body>
  <form action="snack-8.php" method="GET">
    <select name="tipologia" id="tipologia">
      <option value="all">all</option>
      <option value="tech">tech</option>
      <option value="abbigliamento">abbigliamento</option>
    </select>
    <button>Cerca</button>
  </form>
  <div class="container flex">
  <?php
  foreach ($filteredProducts as $product) {  ?>
  <div class="card">
    <img src="<?= $product['immagine'] ?>" alt="">
    <div class="name">
      <span>nome: </span>
      <?= $product['nome'] ?>
    </div>
    <div class="price">
      <span>prezzo: </span>
      <?= $product['prezzo'] ?>
    </div>
    <div class="typology">
      <span>tipologia: </span>
      <?= $product['tipologia'] ?>
    </div>
  </div>
  <?php } ?>
  </div>
</body>
</html>