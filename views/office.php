<?php require 'views/navbar.php'; ?>

<h1 class="title text-center">List Kantor</h1>
<table class="table table-bordered">
    <tr>
        <th class="blue">No</th>
        <th class="blue">Nama</th>
        <th class="blue">Alamat</th>
        <th class="blue">Kota</th>
        <th class="blue">Telepon</th>
        <th class="blue">Delete</th>
    </tr>
    <?php foreach ($offices as $i => $o) { ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $o['nama']; ?></td>
        <td><?php echo $o['alamat']; ?></td>
        <td><?php echo $o['kota']; ?></td>
        <td><?php echo $o['telepon']; ?></td>
        <td><a class="btn btn-sm btn-outline-danger" href="?page=office&delete=<?php echo $o['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>

<h1 class="title text-center mt-5">Tambah Kantor</h1>
<form method="POST">
    <label>Nama</label>
    <input class="form-control mb-2" name="nama" placeholder="Masukkan Nama Kantor" required>
    <label>Alamat</label>
    <input class="form-control mb-2" name="alamat" placeholder="Masukkan Alamat" required>
    <label>Kota</label>
    <input class="form-control mb-2" name="kota" placeholder="Masukkan Kota" required>
    <label>Telepon</label>
    <input class="form-control mb-3" name="telepon" placeholder="Masukkan Telepon" required>
    <div class="text-center">
        <button class="btn blue border-dark px-5" name="save">SUBMIT</button>
    </div>
</form>

</div>
</body>
</html>
