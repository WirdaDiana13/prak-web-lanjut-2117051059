<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>

    <div class="box">
        <div class="container">
            <div class="top-header">
    <form class="container" action="<?= base_url('/user/' . $user['id']) ?>" 
    method="POST" enctype="multipart/form-data">

             <input type="hidden" name="_method" valuve="PUT"> 
             <?= csrf_field() ?>


                <span>Welcome</span>
                <header>Data Mahasiswa</header>
            </div>

            <br><div class="input-field">
                <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                <input type="file"  name="foto" placeholder="upload file" class="form-control 
            <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" autofocus>


            <br><div class="input-field">
                <input type="text"  name="nama" placeholder="Masukkan Nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= $user['nama'] ?>" id="nama"
            id="nama" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
                </div>
            </div>

            <br><div class="input-field">
                <input type="text" name="npm" placeholder="Masukkan NPM" class="form-control<?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" value="<?= $user['npm'] ?>" id="npm"
             id="npm" autofocus>
            <div class="invalid-feedback">
            <?= $validation->getError('npm') ?>
            </div>
            </div>

            <select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item){
                ?>
                <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
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