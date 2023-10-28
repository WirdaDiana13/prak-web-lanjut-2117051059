<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
    <body>
        <div class="box">
        <div class="container">
        <form action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">
        <header>Create Kelas</header>
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" name="nama_kelas" id="floatingInput" placeholder=""">
        
                    <button type="submit">Submit</button>
                            
            </form>
            
        </div>     
    </body>
</div>
<?= $this->endSection() ?>