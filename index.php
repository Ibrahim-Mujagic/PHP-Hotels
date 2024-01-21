<?php
    $hotels = [
      [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
      ],
      [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
      ],
      [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
      ],
      [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
      ],
      [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
      ],
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <title>Hotels</title>
</head>
<body>
  <div class="container p-2">
    <main class="m-auto w-75 ">
      <div class="cont-form mb-3">
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
          <input type="radio" name="parking" id="with-parking" value="1">
          <label for="with-parking">Senza Parcheggio</label>
          <input type="radio" name="parking" id="without-parking" value="0">
          <label for="without-parking">Con Parcheggio</label>
          <label class="ms-3" for="voto">Voto</label>
          <input type="number" name="vote" id="voto">
          <button class="btn btn-primary ms-5" type="submit">Invia</button>
          <button class="btn btn-secondary" type="reset">Annulla</button>
        </form>
      </div>
      <div class="cont-table">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nome</th>
              <th scope="col">Descrizione</th>
              <th scope="col">Parcheggio</th>
              <th scope="col">Stelle</th>
              <th scope="col">Distanza dal centro</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($hotels as $hotel): ?>
            <tr>
              <th><?php echo $hotel['name'] ?></th>
              <td><?php echo $hotel['description'] ?></td>
              <td><?php echo $hotel['parking'] ? 'Si' :'No'  ?></td>
              <td><?php echo $hotel['vote'] ?></td>
              <td><?php echo $hotel['distance_to_center'] ?></td>
            </tr>
           <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>