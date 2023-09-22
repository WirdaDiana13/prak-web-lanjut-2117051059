<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
    <title>Login</title>
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
    <form action="<?= base_url('/user/store') ?>" method="POST">
                <span>Welcome</span>
                <header>Data Mahasiswa</header>
            </div>

            <br><div class="input-field">
                <input type="text" class="input" name="nama" placeholder="Masukkan Nama" required>
            </div>

            <br><div class="input-field">
                <input type="text" class="input" name="npm" placeholder="Masukkan NPM" required>
            </div>

            <select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item){
                ?>
                <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                </option>
            <?php
                }
                ?>
            </select>

            <br><div class="input-field">
                <input type="submit" class="submit" value="Login">
            </div>

</form>
            </div>
        </div>
    </div>
</body>
</html>