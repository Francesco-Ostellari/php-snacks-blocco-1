<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
  $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corporis distinctio doloribus explicabo facere perferendis dolor neque expedita, eius nesciunt. Qui, eveniet. Iusto dolore quos earum sit asperiores. Labore, expedita?";
  $newText = explode(". ", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach ($newText as $key => $newPar) { ?>
  <p><?php echo $newPar;?></p>
  <?php } ?>
</body>
</html>