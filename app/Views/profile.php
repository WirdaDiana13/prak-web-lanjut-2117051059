<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?base_url(assets/css/style.css)?>
  </head>

  <body>  
 <br><div class="text-center">
  <img src="<?=base_url("assets/image/2.jpg")?>" alt="" widht="200px" style="display:block; margin:auto;>
</div>
    <div class="main">
      <center>
        <h1>Nama :<?=$nama ?></h1>
        <h2>NPM :<?=$npm ?></h2>
        <h3>Kelas :<?=$kelas ?></h3>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>