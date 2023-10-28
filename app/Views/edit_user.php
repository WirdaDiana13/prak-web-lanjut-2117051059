<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>

    <div class="box">
        <div class="container">
            <div class="top-header">
    <form class="container" action="<?= base_url('/user/' . $user['id']) ?>" 
    method="POST" enctype="multipart/form-data">

             <input type="hidden" name="_method" value="PUT"> 
             <?= csrf_field() ?>


                <header>EDIT</header>
            </div>

            <br><div class="input-field">
                <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                <input type="file"  name="foto" placeholder="upload file" class="form-control 
            <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" autofocus>


            <br><div class="input-field">
                <input type="text"  name="nama" placeholder="Masukkan Nama" id="input" value="<?= $user['nama']  ?>">
            </div>

            <br><div class="input-field">
                <input type="text" name="npm" placeholder="Masukkan NPM" id="input" value="<?= $user['npm']  ?>">
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