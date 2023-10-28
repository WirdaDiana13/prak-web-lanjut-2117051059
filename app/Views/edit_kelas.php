<?= $this->extend('layouts/app')?>
<?= $this->section('content') ?>
<div>

    <div class="box">
        <div class="container">
            <div class="top-header">
    <form class="container" action="<?= base_url('/kelas/' . $kelas['id']) ?>" 
    method="POST" enctype="multipart/form-data">

             <input type="hidden" name="_method" value="PUT"> 
             <?= csrf_field() ?>


                <header>Edit Kelas</header>
            </div>



            <br><div class="input-field">
                <input type="text"  name="nama_kelas" placeholder="Masukkan Nama" id="input" value="<?= $kelas['nama_kelas']  ?>">
            </div>

 

            <br><div class="input-field">
                <input type="submit" class="submit" >
            </div>

</form>
            </div>
        </div>
    </div>



</div>
<?= $this->endSection() ?>