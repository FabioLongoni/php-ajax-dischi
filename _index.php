<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  include __DIR__.'/dataBase/dischi.php';
  ?>

  <div class="card">
    <div class="card__content">
      <?php
        foreach($dischi as $disco) {
          ?>
            <img src='<?= $disco['poster']?>'alt="">
            <h3 class="album"><?= $disco['title'] ?></h3>
            <div class="info__album">
              <div class="author"><?= $disco['author']?></div>
              <div class="year"><?= $disco['year'] ?></div>
            </div>
          <?php
        }
      ?>   
    </div>
  </div>
</body>
</html>