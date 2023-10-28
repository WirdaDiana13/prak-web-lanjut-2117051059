<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>


<table class = "table"  >
    <thead class ="table-dark">
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
         ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?> </td>
                <td><?= $user['npm'] ?> </td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                <a href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
                <a href="<?= base_url('user/' . $user['id'] . '/edit') ?>">Edit</a>
                <!-- <a href="" class="btn btn-sm btn-warning">Edit</a> -->
                <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>


    


<?= $this->endSection() ?>