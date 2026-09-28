<?php require 'views/navbar.php'; ?>

<div class="mx-auto" style="max-width: 900px;">
    <h1 class="text-center my-4" style="color: #2B3990;">List Kantor</h1>
    <table class="table table-bordered table-hover align-middle border-secondary-subtle">
        <thead>
            <tr>
                <th class="fw-normal" style="background-color: #94D3F7; width: 60px;">No</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Nama</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Alamat</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Kota</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Telepon</th>
                <th class="fw-normal text-center" style="background-color: #94D3F7; width: 100px;">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offices as $i => $o) { ?>
            <tr>
                <td class="py-3"><?= $i ?></td>
                <td class="py-3"><?= $o['nama'] ?></td>
                <td class="py-3"><?= $o['alamat'] ?></td>
                <td class="py-3"><?= $o['kota'] ?></td>
                <td class="py-3"><?= $o['telepon'] ?></td>
                <td class="py-3 text-center">
                    <a class="btn btn-sm btn-outline-danger" href="?page=office&delete=<?= $o['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1 class="text-center mt-5 mb-4" style="color: #2B3990;">Tambah Kantor</h1>
    <form method="POST" class="mx-auto" style="max-width: 480px;">
        <div class="row mb-2 align-items-center">
            <label class="col-3 text-end">Nama</label>
            <div class="col-9"><input class="form-control" name="nama" placeholder="Masukkan Nama Kantor" required></div>
        </div>
        <div class="row mb-2 align-items-center">
            <label class="col-3 text-end">Alamat</label>
            <div class="col-9"><input class="form-control" name="alamat" placeholder="Masukkan Alamat" required></div>
        </div>
        <div class="row mb-2 align-items-center">
            <label class="col-3 text-end">Kota</label>
            <div class="col-9"><input class="form-control" name="kota" placeholder="Masukkan Kota" required></div>
        </div>
        <div class="row mb-3 align-items-center">
            <label class="col-3 text-end">Telepon</label>
            <div class="col-9"><input class="form-control" name="telepon" placeholder="Masukkan Telepon" required></div>
        </div>
        <div class="text-center">
            <button class="btn px-5 border-dark" name="save" style="background-color: #94D3F7;">SUBMIT</button>
        </div>
    </form>
</div>
</div>
</body>
</html>