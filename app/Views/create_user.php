<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>

    <div class="box">
        <div class="container">
            <div class="top-header">
    <form class="container" action="<?= base_url('/user/store') ?>" 
    method="POST" enctype="multipart/form-data">
                <header>CREATE</header>
            </div>

            <br><div class="input-field">
                <input type="file"  name="foto" placeholder="upload file" class="form-control 
            <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" autofocus>


            <br><div class="input-field">
                <input type="text"  name="nama" placeholder="Masukkan Nama" class="form-control 
            <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
                </div>
            </div>

            <br><div class="input-field">
                <input type="text" name="npm" placeholder="Masukkan NPM" class="form-control 
            <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" id="npm" autofocus>
            <div class="invalid-feedback">
            <?= $validation->getError('npm') ?>
            </div>
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



</div>
<?= $this->endSection() ?>