<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<a href="<?= base_url('/kelas/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" >
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url('/user') ?>" style="margin-left : 100px; font-size : 20px;">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/kelas') ?>" style="margin-left : 100px; font-size : 20px;">Kelas</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<table class = "table"  >
    <thead class ="table-dark">
            <th>ID</th>
            <th>Kelas</th>
            <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
         ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                <a href="<?= base_url('kelas/' . $user['id']) ?>">Detail</a>
                <a href="<?= base_url('kelas/' . $user['id'] . '/edit') ?>">Edit</a>
                <!-- <a href="" class="btn btn-sm btn-warning">Edit</a> -->
                <form action="<?= base_url('kelas/' . $user['id']) ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <button type="submit">Delete</button>

                </form>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>


    


<?= $this->endSection() ?>