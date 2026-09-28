<?php require 'views/navbar.php'; ?>

<h1 class="title text-center">List Karyawan</h1>
<table class="table table-bordered">
    <tr>
        <th class="blue">No</th>
        <th class="blue">Nama</th>
        <th class="blue">Jabatan</th>
        <th class="blue">Usia</th>
        <th class="blue">Delete</th>
    </tr>
    <?php foreach ($employees as $i => $e) { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $e['nama']; ?></td>
        <td><?php echo $e['jabatan']; ?></td>
        <td><?php echo $e['usia']; ?></td>
        <td><a class="btn btn-sm btn-outline-danger" href="?page=employee&delete=<?php echo $e['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>

<h1 class="title text-center mt-5">Tambah Karyawan</h1>
<form method="POST">
    <label>Nama</label>
    <input class="form-control mb-2" name="nama" placeholder="Masukkan Nama" required>
    <label>Jabatan</label>
    <input class="form-control mb-2" name="jabatan" placeholder="Masukkan Jabatan" required>
    <label>Usia</label>
    <input class="form-control mb-3" name="usia" type="number" placeholder="Masukkan Usia" required>
    <div class="text-center">
        <button class="btn blue border-dark px-5" name="save">SUBMIT</button>
    </div>
</form>

</div>
</body>
</html>
