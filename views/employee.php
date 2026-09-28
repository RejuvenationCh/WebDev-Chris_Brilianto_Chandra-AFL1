<?php require 'views/navbar.php'; ?>

<div class="mx-auto" style="max-width: 720px;">
    <h1 class="text-center my-4" style="color: #2B3990;">List Karyawan</h1>
    <table class="table table-bordered table-hover align-middle border-secondary-subtle">
        <thead>
            <tr>
                <th class="fw-normal" style="background-color: #94D3F7; width: 60px;">No</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Nama</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Jabatan</th>
                <th class="fw-normal" style="background-color: #94D3F7;">Usia</th>
                <th class="fw-normal text-center" style="background-color: #94D3F7; width: 100px;">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $i => $e) { ?>
            <tr>
                <td class="py-3"><?= $i ?></td>
                <td class="py-3"><?= $e['nama'] ?></td>
                <td class="py-3"><?= $e['jabatan'] ?></td>
                <td class="py-3"><?= $e['usia'] ?></td>
                <td class="py-3 text-center">
                    <a class="btn btn-sm btn-outline-danger" href="?page=employee&delete=<?= $e['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <h1 class="text-center mt-5 mb-4" style="color: #2B3990;">Tambah Karyawan</h1>
    <form method="POST" class="mx-auto" style="max-width: 480px;">
        <div class="row mb-2 align-items-center">
            <label class="col-3 text-end">Nama</label>
            <div class="col-9"><input class="form-control" name="nama" placeholder="Masukkan Nama" required></div>
        </div>
        <div class="row mb-2 align-items-center">
            <label class="col-3 text-end">Jabatan</label>
            <div class="col-9"><input class="form-control" name="jabatan" placeholder="Masukkan Jabatan" required></div>
        </div>
        <div class="row mb-3 align-items-center">
            <label class="col-3 text-end">Usia</label>
            <div class="col-9"><input class="form-control" name="usia" type="number" placeholder="Masukkan Usia" required></div>
        </div>
        <div class="text-center">
            <button class="btn px-5 border-dark" name="save" style="background-color: #94D3F7;">SUBMIT</button>
        </div>
    </form>
</div>
</div>
</body>
</html>